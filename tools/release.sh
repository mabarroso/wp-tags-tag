mkdir out &>/dev/null
mkdir out/tags-tag &>/dev/null
rm out/tags-tag/*
cp README.md		    		    out/tags-tag
cp -r src/* 				    		out/tags-tag
cd out
zip tags-tag.zip tags-tag/*
tar -cvf tags-tag.tar.gz tags-tag/*
cd ..
