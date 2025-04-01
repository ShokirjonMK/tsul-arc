#!/bin/bash

# 1. O'zgaruvchilar
SOURCE_FILE="./backup/mk.sh"
TARGET_DIR="/opt/backup"
TARGET_FILE="$TARGET_DIR/mk.sh"
REPO_VAR_LINE='REPO_DIR_API=$(pwd)'

# 2. Tekshirish: manba fayl mavjudmi?
if [ ! -f "$SOURCE_FILE" ]; then
    echo "[XATO] $SOURCE_FILE topilmadi. Chiqa olmayapman."
    exit 1
fi

# 3. REPO_DIR_API bor-yo‘qligini tekshirib, commentga olib, yangisini boshiga qo‘shish
if grep -q '^REPO_DIR_API=' "$SOURCE_FILE"; then
    echo "[INFO] Eski REPO_DIR_API topildi. Uni commentga olayapman va yangisini qo‘shaman..."
    sed -i 's/^REPO_DIR_API=/#&/' "$SOURCE_FILE"
    sed -i "1i$REPO_VAR_LINE" "$SOURCE_FILE"
else
    echo "[INFO] REPO_DIR_API topilmadi. Yangi qator qo‘shilmoqda..."
    sed -i "1i$REPO_VAR_LINE" "$SOURCE_FILE"
fi

# 4. Maqsadli katalogni yaratish (agar mavjud bo'lmasa)
if [ ! -d "$TARGET_DIR" ]; then
    echo "[INFO] $TARGET_DIR katalogi yaratilmoqda..."
    mkdir -p "$TARGET_DIR"
fi

# 5. Faylni yangi joyga nusxalash
cp "$SOURCE_FILE" "$TARGET_FILE"
chmod +x "$TARGET_FILE"
echo "[INFO] $TARGET_FILE bajariladigan qilindi."

# 6. Yangi skriptni ishga tushurish
echo "[INFO] Backup skripti ishga tushirilmoqda..."
if "$TARGET_FILE"; then
    echo "[INFO] Backup muvaffaqiyatli ishga tushdi."
else
    echo "[XATO] Backup skript ishida muammo."
    exit 1
fi

# 7. Cron job yozish
CRON_JOB="0 2 * * * $TARGET_FILE"
CRONTAB_TMP=$(mktemp)

# Eski `mk.sh` ga oid yozuvlarni commentga olish
crontab -l 2>/dev/null | while read -r line; do
    if echo "$line" | grep -Fq "mk.sh"; then
        echo "# $line" >> "$CRONTAB_TMP"
    else
        echo "$line" >> "$CRONTAB_TMP"
    fi
done

# Yangi cron jobni qo‘shish
echo "$CRON_JOB" >> "$CRONTAB_TMP"
crontab "$CRONTAB_TMP"
rm "$CRONTAB_TMP"

echo "[✅] Cron job yangilandi: $CRON_JOB"
