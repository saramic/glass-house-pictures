server:
	npx http-server ushop-child

fetch:
	scp -r dh_fgyaua@henrico.dreamhost.com:~/glasshousepictures.com.au/wp-content/themes/ushop-child .

upload:
	scp -r ushop-child/* dh_fgyaua@henrico.dreamhost.com:~/glasshousepictures.com.au/wp-content/themes/ushop-child/
