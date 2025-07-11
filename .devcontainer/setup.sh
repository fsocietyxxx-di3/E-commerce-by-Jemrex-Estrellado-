#!/bin/bash

REPO_DIR="/workspaces/E-commerce-by-Jemrex-Estrellado"

# 1. Create phpmyadmin directory
mkdir -p "$REPO_DIR/phpmyadmin"
cd "$REPO_DIR/phpmyadmin"

# 2. Download phpMyAdmin only if not already there
if [ ! -f "index.php" ]; then
  echo "📦 Downloading phpMyAdmin..."
  wget -q https://www.phpmyadmin.net/downloads/phpMyAdmin-latest-all-languages.zip
  unzip -q phpMyAdmin-latest-all-languages.zip
  mv phpMyAdmin-*-all-languages/* .
  rm -rf phpMyAdmin-*-all-languages* phpMyAdmin-latest-all-languages.zip

  cp config.sample.inc.php config.inc.php
  sed -i "s/'localhost'/'127.0.0.1'/" config.inc.php
  sed -i "s/'cookie'/'config'/" config.inc.php
  echo "\$cfg['Servers'][1]['user'] = 'dev';" >> config.inc.php
  echo "\$cfg['Servers'][1]['password'] = 'password';" >> config.inc.php
  echo "\$cfg['blowfish_secret'] = '$(openssl rand -hex 16)';" >> config.inc.php
fi

echo "✅ Setup complete!"
echo "➡️  Run these manually to start servers:"
echo "   php -S 0.0.0.0:8000 -t .    (for your E-commerce site)"
echo "   php -S 0.0.0.0:8080 -t phpmyadmin"
