#!/usr/bin/env bash
gulp --production &&
rsync -avP dist lib screenshot.png templates *.php *.css hamiltonwellness:public_html/wp/wp-content/themes/poman
