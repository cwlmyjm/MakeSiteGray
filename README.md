# MakeSiteGray

## 使用方法
在插件管理中激活<u>MakeSiteGray</u>插件就可以实现全站变灰了。

## 实现原理
激活后会加载MakeSiteGray\src\style.css。  
style.css内容如下。
```
html {
	-webkit-filter: grayscale(100%);
	-moz-filter: grayscale(100%);
	-ms-filter: grayscale(100%);
	-o-filter: grayscale(100%);
	filter: progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);
	_filter: none;
}
```

## 已知问题
设置在body上的背景图片好像不会变灰，我也不知道为什么。
