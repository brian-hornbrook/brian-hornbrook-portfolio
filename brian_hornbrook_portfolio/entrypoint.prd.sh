#!/usr/bin/env bash

python -m gunicorn --bind 0.0.0.0:$PORT --workers 3 $APP_NAME.wsgi:application
