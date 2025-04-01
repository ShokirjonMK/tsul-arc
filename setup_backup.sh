#!/bin/bash

# 1. Yangi joyni aniqlash
TARGET_DIR="/opt/backup"
MK_SOURCE="./backup/mk.sh"
MK_TARGET="$TARGET_DIR/mk.sh"

# 2. Katalogni yaratish (agar mavjud bo'lmasa)
if [ ! -d "$TARGET_DIR" ]; then
    echo "[INFO] $TARGET_DIR katalogi yaratilmoqda..."
    mkdir -p "$TARGET_DIR"
fi

# 3. Eski skript mavjudligini tekshirish va ko‘chirish
if [ -f "$MK_SOURCE" ]; then
    echo "[INFO] $MK_SOURCE fayli ko'chirilmoqda -> $MK_TARGET"
    cp "$MK_SOURCE" "$MK_TARGET"
else
    echo "[XATO] $MK_SOURCE topilmadi. Skriptni to‘liq ko‘chira olmadim."
    exit 1
fi

# 4. Loyihaning joriy joyi
PROJECT_PATH=$(pwd)
ENV_FILE="$PROJECT_PATH/.env"

# 5. .env fayl mavjudligini tekshirish va yaratish
if [ ! -f "$ENV_FILE" ]; then
    touch "$ENV_FILE"
    echo "[INFO] .env fayli yaratildi."
fi

# 6. PROJECT_PATH ni .env faylga yozish (agar yo'q bo'lsa)
if ! grep -q "^PROJECT_PATH=" "$ENV_FILE"; then
    echo "PROJECT_PATH=$PROJECT_PATH" >> "$ENV_FILE"
    echo "[INFO] .env faylga PROJECT_PATH yozildi: $PROJECT_PATH"
else
    echo "[INFO] .env faylida PROJECT_PATH allaqachon mavjud."
fi

# 7. Ruxsat berish
if chmod +x "$MK_TARGET"; then
    echo "[INFO] $MK_TARGET bajariladigan qilindi."
else
    echo "[XATO] $MK_TARGET ga ruxsat berilmadi!"
    exit 1
fi

# 8. Hozir ishga tushirish (manbadan emas, endi yangi joydan)
echo "[INFO] Backup skripti ishga tushirilmoqda..."
if "$MK_TARGET"; then
    echo "[INFO] Backup skript muvaffaqiyatli ishga tushdi."
else
    echo "[XATO] Backup skript bajarishda xatolik yuz berdi."
    exit 1
fi

# 9. Cron job qo‘shish (har 2 soatda)
CRON_JOB="0 2 * * * $MK_TARGET"
if crontab -l 2>/dev/null | grep -Fq "$CRON_JOB"; then
    echo "[INFO] Cron job allaqachon mavjud."
else
    (crontab -l 2>/dev/null; echo "$CRON_JOB") | crontab -
    echo "[INFO] Cron job qo‘shildi: $CRON_JOB"
fi

echo "[✅] Hammasi tayyor. Backup avtomatlashtirildi va cron sozlandi."
