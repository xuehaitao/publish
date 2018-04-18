function Encrypt(word,key){
	 var key = CryptoJS.enc.Utf8.parse(key);
	 //var iv  = CryptoJS.enc.Utf8.parse(key);
	 var iv  = CryptoJS.enc.Utf8.parse('0102030405060708');
	 var srcs = CryptoJS.enc.Utf8.parse(word);

	 var encrypted = CryptoJS.AES.encrypt(srcs, key, { iv: iv,mode:CryptoJS.mode.CBC,padding:CryptoJS.pad.Pkcs7});
	 return encrypted.toString();
	// return CryptoJS.enc.Base64.parse(encrypted.toString());
}
function Decrypt(word,key){
	 var key = CryptoJS.enc.Utf8.parse(key);
	 //var iv  = CryptoJS.enc.Utf8.parse(key);
	 var iv  = CryptoJS.enc.Utf8.parse('0102030405060708');
	 var decrypt = CryptoJS.AES.decrypt(word, key, { iv: iv,mode:CryptoJS.mode.CBC,padding:CryptoJS.pad.Pkcs7});
	 //console.log("decrypt~~~" + decrypt );
	 //console.log('CryptoJS.enc.Utf8~~~' + CryptoJS.enc.Utf8);
	 return decrypt.toString(CryptoJS.enc.Utf8);
}

//获取AES密钥
function getAESKey(n) {
	var rnd = "";
	for (var i = 0; i < n; i++){
		rnd += Math.floor(Math.random() * 10);
	}
	return rnd;
	// return '0102030405060708'
}

//RSA加密
function encrytRsa(str){
	var pub_key = '-----BEGIN PUBLIC KEY-----MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDmD0CIx47s6/ouaL/yCYlBAKPRX//hZm82Fgxs7WxxW62d5zc2gjP6EGrYKABhwitnL2NW1zNz9TeWxk7waOXjKdHRV6sfSfMTf5willpRSwQ3BJgX2DOFiUNxgWgVFuiYe/WI3bJwihhKcaviOpN3UM/Ee3HVmy/DpGo5q4ZK5QIDAQAB-----END PUBLIC KEY-----';
  	//客户端公钥：
  	//var pub_key = '-----BEGIN PUBLIC KEY-----MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCisCS7FAZe4J8JxSHSl9vFdsv0k3/qR0u4fsl15iUklDYWjCJU1X93mkBzdHy5fxFmoTD8xX284kDXzu3Tc8woH5ZG/YLgq3wwI4Wmd5iyy7PSiA8oZ70oBoHQqSPTAGToXBthPQIb36JjOBeKPJ5LpSJlNlnMZhmyD/BVgUGZQwIDAQAB-----END PUBLIC KEY-----';
	rsa = forge.pki.publicKeyFromPem(pub_key);
	rsa_str = rsa.encrypt(str);
	encrypt_str = forge.util.encode64(rsa_str);

	return encrypt_str;
}

//RSA解密
function decryptRsa(str){
	pri_key = '';
	rsa = forge.pki.privateKeyFromPem(pri_key);
	rsa_str = 'kpk9e613KW5ZOyVVehgyXW82pkf4S4BEjsvMdTZVmdOYGX3pzmqUmS9O1pyJ4RFv5hctTEDjKx3puoZShkrMovs5VXNANxIRxEZUV5dig4UsW5DxerUV+83frJa7nCvvd+yhyX8f+7cOp+6ispxcF7iw96AZaReNFBrBKOWtEko=';
	str = forge.util.decode64(rsa_str);
	decrypt_str = rsa.decrypt(str);
}

//AES加密
function encrytAes(str,aseKey){
	encry_str = Encrypt(str,aseKey);
	return encry_str;
}

//AES解密
function decryptAes(str,aesKey){
	decy_str = Decrypt(str, aesKey);
	return decy_str;
}

