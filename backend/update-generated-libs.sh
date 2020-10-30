# Todo: Make sure openapi-generate-cli is installed
mkdir output
openapi-generator-cli  generate -i ../openapi.yml -g php-slim4 -o ./output -c openapi-server-config.json
# Now copy only the necessary files
cp -R ./output/lib/* ./generated-lib/.
# Delete the rest
rm -rf output
