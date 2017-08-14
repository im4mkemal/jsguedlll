
<script type="text/javascript" src="http://www.livetv.id/js/rijndael.js"></script>
<script type="text/javascript" src="http://www.livetv.id/js/mcrypt.js"></script>
<script type="text/javascript" src="http://www.livetv.id/js/wmsAuth.js"></script>
<meta name="robots" content="noindex" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/clappr/0.2.63/clappr.min.js"></script>
<script type="text/javascript" src="http://www.livetv.id/player/dist/level-selector.js"></script>
<div id="player"></div>
<script type="text/javascript">
	var player = new Clappr.Player(	{
	source: "https://t5-id-1.nim.mivo.tv/wm3d5ndxxds8h3kr/sctv2_all/playlist.m3u8?nimblesessionid=78834629&wmsAuthSign=c2VydmVyX3RpbWU9OC8xNC8yMDE3IDEyOjQ2OjU1IFBNJmhhc2hfdmFsdWU9Ri90RlFQbzJjTjRORlRZZmMxbHJIdz09JnZhbGlkbWludXRlcz0xNDQwJmlkPS04NDgyNjM0NHwxOTguNy41OC45Ng==",
	//source: "https://t4-id-1.nim.mivo.tv/wm3d5ndxxds8h3kr/sctv2_all/playlist.m3u8"+decrypted,
	parentId: "#player",
	width:'100%',
	height:'100%',
	disableVideoTagContextMenu: true,
	//baseUrl: '/player/',
	//plugins: '/player/clapper.swf',
	poster: "http://3.bp.blogspot.com/-wg_lEucWtss/WZHzUguhsjI/AAAAAAAAO_s/iQf9Jprelk4DXbo5zl8bHNQ_KzhXUUs4ACK4BGAYYCw/s1600/lyr.png", 	
	  plugins: {
		'core': [LevelSelector]
	  },
	playbackNotSupportedMessage: "Player Error !<br> Browser ini tidak mendukung video kami, gunakan Opera, Chrome, Firefox atau lainnya.",
	autoPlay: true,
    watermark: "http://2.bp.blogspot.com/-kezohRaLqwc/WZHzfP4S8gI/AAAAAAAAO_0/uEtxGz2LKjo0fmoX7HDlv4oGpTnBcsQoACK4BGAYYCw/s1600/icon.png", position: 'top-left',
    watermarkLink: "/"
});
</script>