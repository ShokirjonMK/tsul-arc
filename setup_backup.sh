#!/bin/bash
# 1. Yangi joyni aniqlash
TARGET_DIR="/opt/backup"

# 2. Agar katalog mavjud bo'lmasa, yaratish
mkdir -p "$TARGET_DIR"

# 3. Eski skriptni yangi joyga ko'chirish
cp ./backup/mk.sh "$TARGET_DIR/mk.sh"

# Loyiha katalogini aniqlash
PROJECT_PATH=$(pwd)

# `.env` faylga `PROJECT_PATH` mavjudligini tekshirish va qo‘shish
if ! grep -q "PROJECT_PATH=" "$PROJECT_PATH/.env"; then
    echo "PROJECT_PATH=$PROJECT_PATH" >> "$PROJECT_PATH/.env"
    echo ".env faylga PROJECT_PATH qo‘shildi: $PROJECT_PATH"
else
    echo "PROJECT_PATH allaqachon mavjud: $(grep 'PROJECT_PATH' "$PROJECT_PATH/.env")"
fi

# Backup skriptga bajarish ruxsatini berish
chmod +x "$TARGET_DIR/mk.sh"

# Backup skriptni hoziroq ishga tushirish
echo "Backup skripti ishga tushirilmoqda..."
"$PROJECT_PATH/backup/mk.sh"

# Cron job qo'shish
CRON_JOB="2 * * * * $TARGET_DIR/mk.sh"

# Cron job allaqachon mavjudligini tekshirish va qo'shish
(crontab -l 2>/dev/null | grep -F "$CRON_JOB") || (crontab -l 2>/dev/null; echo "$CRON_JOB") | crontab -

echo "Backup skripti uchun ruxsat berildi, ishga tushirildi va cron job qo‘shildi."
