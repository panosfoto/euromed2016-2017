# Rename all *.txt to *.text
for f in */*/*.html; do 
mv -- "$f" "${f%.html}.php"
done
