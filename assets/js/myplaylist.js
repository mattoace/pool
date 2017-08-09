/*var myPlaylist = [
	
	{
		mp3:'assets/music/1.mp3',
		title:'Missing You',
		artist:'Alexandra',
		rating:5,
		buy:'#',
		price:'17',
		duration:'0:38',
		cover:'assets/images/1_music.jpg'	
	},
	{
		mp3:'assets/music/4.mp3',
		title:'Midnight In Tokyo',
		artist:'BlueFoxMusic',
		rating:4,
		buy:'#',
		price:'17',
		duration:'2:51',
		cover:'assets/images/4.jpg'	
	},		
	{
		mp3:'assets/music/5.mp3',
		title:'Walking On Horizon',
		artist:'Dejans',
		rating:5,
		buy:'#',
		price:'17',
		duration:'4:29',
		cover:'assets/images/5.jpg'
	},
	{
		mp3:'assets/music/6.mp3',
		title:'A Happy Carefree Day',
		artist:'JoshKramerMusic',
		rating:5,
		buy:'#',
		price:'13',
		duration:'2:45',
		cover:'assets/images/6.jpg'	
	},
	{
		mp3:'assets/music/2.mp3',
		title:'Through the Clouds',
		artist:'Dejans',
		rating:4,
		buy:'#',
		price:'17',
		duration:'5:56',
		cover:'assets/images/2.jpg'	
	},
	{
		mp3:'assets/music/3.mp3',
		title:'Live My Life',
		artist:'Metrolightmusic',
		rating:5,
		buy:'#',
		price:'17',
		duration:'2:31',
		cover:'assets/images/3.jpg'	
	}
];
*/

jQuery(document).ready(function ($) {

	$.get("fetch-playlist",function(data){ 

	 $('.music-player-list').ttwMusicPlayer(data, {
		currencySymbol:'KSH ',
		buyText:'BUY',
		tracksToShow:3,
		autoplay:true,
		ratingCallback:function(index, playlistItem, rating){
			//some logic to process the rating, perhaps through an ajax call
		},
		jPlayer:{
			swfPath: "assets/js/Jplayer.swf",
			supplied: "mp3",
			volume:  0.8,
			wmode:"window",
			solution: "html,flash",
			errorAlerts: true,
			warningAlerts: false
		}
	});

	},"json");

});