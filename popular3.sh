tail +2 table.txt | awk '{count[$3]++} END {for (i in count) printf("%s\t%i\n", i, count[i])}' | sort -nr -k2 | head -n3