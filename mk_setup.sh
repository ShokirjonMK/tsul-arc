#!/bin/bash

# 1. Yangi joyni aniqlash
TARGET_DIR="/opt/backup"

# 2. Agar katalog mavjud bo'lmasa, yaratish
mkdir -p "$TARGET_DIR"

# 3. Eski skriptni yangi joyga ko'chirish
cp ./backup/mk.sh "$TARGET_DIR/mk.sh"

# 4. Ruxsat berish
chmod +x "$TARGET_DIR/mk.sh"

# 5. .env faylga yangi path yozish (agar mavjud bo'lmasa)
ENV_FILE="$TARGET_DIR/.env"
if [ ! -f "$ENV_FILE" ]; then
    touch "$ENV_FILE"
fi

if ! grep -q "PROJECT_PATH=" "$ENV_FILE"; then
    echo "PROJECT_PATH=$TARGET_DIR" >> "$ENV_FILE"
    echo "PROJECT_PATH yozildi: $TARGET_DIR"
else
    echo "PROJECT_PATH mavjud: $(grep 'PROJECT_PATH' "$ENV_FILE")"
fi

# 6. Cron job yozish (har 2-soatda ishga tushadi)
CRON_JOB="0 */2 * * * $TARGET_DIR/mk.sh"
( crontab -l 2>/dev/null | grep -F "$CRON_JOB" ) || ( crontab -l 2>/dev/null; echo "$CRON_JOB" ) | crontab -

# 7. Hozir ishga tushurish
echo "Backup ishga tushirilmoqda..."
"$TARGET_DIR/mk.sh"

echo "Tayyor! Skript $TARGET_DIR ga ko'chirildi, cron qo‘shildi, darhol ishga tushdi."
