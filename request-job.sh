#!/bin/bash

EXEC_DATE=$(date +"%H:%M (%m-%d-%Y)")

if [ "$1" = "rest_helloworld" ]; then
  RESULT=$(curl -LI http://localhost/api/helloworld -o /dev/null -w 'HTTP RESPONSE: %{http_code}\n' -s)
  echo "[REST HELLOWORLD] $EXEC_DATE - $RESULT" >> curl-results.txt
fi

if [ "$1" = "rest_countries" ]; then
  RESULT=$(curl -LI http://localhost/api/countries/"$2" -o /dev/null -w 'HTTP RESPONSE: %{http_code}\n' -s)
  echo "[REST COUNTRIES] $EXEC_DATE - $RESULT" >> curl-results.txt
fi

if [ "$1" = "soap_helloworld" ]; then
  RESULT=$(curl -w 'HTTP RESPONSE: %{response_code}' -s -X POST --data '@/www/webservices/helloworld_request.xml' http://localhost/zoap/helloworld/server --header "Content-Type:text/xml"|grep -o  'HTTP RESPONSE: [1-4][0-9][0-9]')
  echo "[SOAP HELLOWORLD] $EXEC_DATE - $RESULT" >> curl-results.txt
fi

if [ "$1" = "soap_countries" ]; then
  RESULT=$(curl -w 'HTTP RESPONSE: %{response_code}' -s -X POST --data '@/www/webservices/countries_request.xml' http://localhost/zoap/countries/server --header "Content-Type:text/xml"|grep -o  'HTTP RESPONSE: [1-4][0-9][0-9]')
  echo "[SOAP COUNTRIES] $EXEC_DATE - $RESULT" >> curl-results.txt
fi
