if (typeof Date.now === 'undefined') {Date.now = function () {return new Date().valueOf();};}

/**bookdatajs****/
var pagetitle = [
"Page 01",
"Page 02",
"Page 03",
"Page 04",
"Page 05",
"Page 06",
"Page 07",
"Page 08",
"Page 09",
"Page 10",
"Page 11",
"Page 12",
"Page 13",
"Page 14",
"Page 15",
"Page 16",
"Page 17",
"Page 18",
"Page 19",
"Page 20",
"Page 21",
"Page 22",
"Page 23",
"Page 24"];
var pageImgPathList = [
"contents/image/book/medium/image-02.jpg?20210301171726",
"contents/image/book/medium/image-03.jpg?20210301171726",
"contents/image/book/medium/image-04.jpg?20210301171726",
"contents/image/book/medium/image-05.jpg?20210301171726",
"contents/image/book/medium/image-06.jpg?20210301171726",
"contents/image/book/medium/image-07.jpg?20210301171726",
"contents/image/book/medium/image-08.jpg?20210301171726",
"contents/image/book/medium/image-09.jpg?20210301171726",
"contents/image/book/medium/image-10.jpg?20210301171726",
"contents/image/book/medium/image-11.jpg?20210301171726",
"contents/image/book/medium/image-12.jpg?20210301171726",
"contents/image/book/medium/image-13.jpg?20210301171726",
"contents/image/book/medium/image-14.jpg?20210301171726",
"contents/image/book/medium/image-15.jpg?20210301171726",
"contents/image/book/medium/image-16.jpg?20210301171726",
"contents/image/book/medium/image-17.jpg?20210301171726",
"contents/image/book/medium/image-18.jpg?20210301171726",
"contents/image/book/medium/image-19.jpg?20210301171726",
"contents/image/book/medium/image-20.jpg?20210301171726",
"contents/image/book/medium/image-21.jpg?20210301171726",
"contents/image/book/medium/image-22.jpg?20210301171726",
"contents/image/book/medium/image-23.jpg?20210301171726",
"contents/image/book/medium/image-24.jpg?20210301171726",
"contents/image/book/medium/image-01.jpg?20210301171726"];
var pageImgPathList_large = [
"contents/image/book/large/image-02.jpg?20210301171726",
"contents/image/book/large/image-03.jpg?20210301171726",
"contents/image/book/large/image-04.jpg?20210301171726",
"contents/image/book/large/image-05.jpg?20210301171726",
"contents/image/book/large/image-06.jpg?20210301171726",
"contents/image/book/large/image-07.jpg?20210301171726",
"contents/image/book/large/image-08.jpg?20210301171726",
"contents/image/book/large/image-09.jpg?20210301171726",
"contents/image/book/large/image-10.jpg?20210301171726",
"contents/image/book/large/image-11.jpg?20210301171726",
"contents/image/book/large/image-12.jpg?20210301171726",
"contents/image/book/large/image-13.jpg?20210301171726",
"contents/image/book/large/image-14.jpg?20210301171726",
"contents/image/book/large/image-15.jpg?20210301171726",
"contents/image/book/large/image-16.jpg?20210301171726",
"contents/image/book/large/image-17.jpg?20210301171726",
"contents/image/book/large/image-18.jpg?20210301171726",
"contents/image/book/large/image-19.jpg?20210301171726",
"contents/image/book/large/image-20.jpg?20210301171726",
"contents/image/book/large/image-21.jpg?20210301171726",
"contents/image/book/large/image-22.jpg?20210301171726",
"contents/image/book/large/image-23.jpg?20210301171726",
"contents/image/book/large/image-24.jpg?20210301171726",
"contents/image/book/large/image-01.jpg?20210301171726"];
var pageImgPathList_thumb = [
"contents/image/book/small/image-02.jpg?20210301171726",
"contents/image/book/small/image-03.jpg?20210301171726",
"contents/image/book/small/image-04.jpg?20210301171726",
"contents/image/book/small/image-05.jpg?20210301171726",
"contents/image/book/small/image-06.jpg?20210301171726",
"contents/image/book/small/image-07.jpg?20210301171726",
"contents/image/book/small/image-08.jpg?20210301171726",
"contents/image/book/small/image-09.jpg?20210301171726",
"contents/image/book/small/image-10.jpg?20210301171726",
"contents/image/book/small/image-11.jpg?20210301171726",
"contents/image/book/small/image-12.jpg?20210301171726",
"contents/image/book/small/image-13.jpg?20210301171726",
"contents/image/book/small/image-14.jpg?20210301171726",
"contents/image/book/small/image-15.jpg?20210301171726",
"contents/image/book/small/image-16.jpg?20210301171726",
"contents/image/book/small/image-17.jpg?20210301171726",
"contents/image/book/small/image-18.jpg?20210301171726",
"contents/image/book/small/image-19.jpg?20210301171726",
"contents/image/book/small/image-20.jpg?20210301171726",
"contents/image/book/small/image-21.jpg?20210301171726",
"contents/image/book/small/image-22.jpg?20210301171726",
"contents/image/book/small/image-23.jpg?20210301171726",
"contents/image/book/small/image-24.jpg?20210301171726",
"contents/image/book/small/image-01.jpg?20210301171726"];

/*検索用テキスト*/
var pageTextContents = [
	pagetitle[0] + ""
	, pagetitle[1] + ""
	, pagetitle[2] + ""
	, pagetitle[3] + ""
	, pagetitle[4] + ""
	, pagetitle[5] + ""
	, pagetitle[6] + ""
	, pagetitle[7] + ""
	, pagetitle[8] + ""
	, pagetitle[9] + ""
	, pagetitle[10] + ""
	, pagetitle[11] + ""
	, pagetitle[12] + ""
	, pagetitle[13] + ""
	, pagetitle[14] + ""
	, pagetitle[15] + ""
	, pagetitle[16] + ""
	, pagetitle[17] + ""
	, pagetitle[18] + ""
	, pagetitle[19] + ""
	, pagetitle[20] + ""
	, pagetitle[21] + ""
	, pagetitle[22] + ""
	, pagetitle[23] + ""
];


/* link */
var pageLinkContents = {
};

var pageImgSize = { width: 679, height: 960 };
var pageImgSize_large = { width: 2119, height: 2998 };
var pageImgSize_thumb = { width: 71, height: 100 };

var eternalId = eternal_id;
var sessionId = session_id;
var resol = getResolution();
var referrer = encodeURIComponent(document.referrer);
var ans_url='https://log1.ebook5.net/analytics/';
var dl_url='https://asp.ebook5.net/';

/**
* page jump function
*/
function xjump(x) {
	return ebook.BookData.PageJump(x);
}

/**/


var loggingPageDragPointAccess_HDL=false;
loggingPageDragPointAccess=function(md,pg1,pg2,pos,diftm){
	if(loggingPageDragPointAccess_HDL!==false)clearInterval(loggingPageDragPointAccess_HDL);
	loggingPageDragPointAccess_HDL=setTimeout(function(){viewTrack();loggingPageDragPointAccess_HDL=false;},100);
	function viewTrack(){
		if(pos.x=='Infinity')return;
		var _pos=[Math.round((pos.x||0)*1000),Math.round((pos.y||0)*1000)].join(',');
		//if(pg1<=0)pg1=0;
		//if(pg2<=0)pg2=0;
		var _data= {
			'mode': 'pagedrag', 'bookId': 89719, 'curPageNo': pg1,'curPageNo2': pg2,
			'point':_pos,'times':diftm,'eternalId': eternalId, 'sessionId': sessionId,'md':md
		};
		$.ajax({
			type: 'GET',url: ans_url,data:_data,
			cache: false,crossDomain:true
		});
			}
}
/////
var loggingViewRectAccess_HDL=false;
var loggingViewRectAccess_drawtime=Date.now();
loggingViewRectAccess=function(md,pg1,pg2,rect){
	if(loggingViewRectAccess_HDL!==false)clearInterval(loggingViewRectAccess_HDL);
	loggingViewRectAccess_HDL=setTimeout(function(){viewTrack();loggingViewRectAccess_HDL=false;},100);
	function viewTrack(){
		var now=Date.now();
		var spantime=(loggingViewRectAccess_drawtime==0)?0:now-loggingViewRectAccess_drawtime;
		loggingViewRectAccess_drawtime=now;
		var rects=[Math.round(rect.x||0),Math.round(rect.y||0),Math.round(rect.w||0),Math.round(rect.h||0)].join(',');
		//if(pg1<=0)pg1=0;
		//if(pg2<=0)pg2=0;
		var _data= {
			'mode': 'rect', 'bookId': 89719, 'curPageNo': pg1,'curPageNo2': pg2,
			'rects':rects,'times':spantime,
			'eternalId': eternalId, 'sessionId': sessionId,'md':md
		};
		$.ajax({
			type: 'GET',url: ans_url,data:_data,
			cache: false,crossDomain:true
		});
		}
}
/////
loggingLinkAccess=function(pageNo, linkSeq){
	if(typeof gtag != 'undefined'){
		var title = pageLinkContents[pageNo][linkSeq - 1]['title'];
		gtag('event', 'link_click', {'event_category': 'No Title', 'event_label': 'P.' + pageNo + '_SEQ.' + linkSeq + '_TITLE.' + title});
	}else if(typeof ga != 'undefined'){
		var title = pageLinkContents[pageNo][linkSeq - 1]['title'];
		ga('send', 'event', 'No Title', 'link_click', 'P.' + pageNo + '_SEQ.' + linkSeq + '_TITLE.' + title);
	}

	var l1=pageLinkContents[pageNo]||false;
	if( !l1 || !linkSeq )return;
	var l2=l1[linkSeq-1]||false;
	if( !l2 ) return;
	var dat= { 'bookId': 89719, 'curPageNo': pageNo, 'linkSeq': linkSeq, 'eternalId': eternalId, 'sessionId': sessionId};
	var _type=l2['type']||false;
	var _url=l2['url']||false;
	var _mode=false,_target='';
	if(!_type && _url ){
		_mode= (/javascript:xjump/).test(_url) ? 'xjump' : 'urllink';
	}else if( _type=='youtube'){
		_mode= 'youtube';
	}else if( _type=='googlemap'){
		_mode= 'googlemap';
	}
	switch(_mode){
		case 'xjump':
			var ret=_url.match(/javascript:xjump\(([0-9]+)\)/);
			dat['target']=RegExp.$1;
			break;
		case 'youtube':
			var code=l2['youtube_id']||false;
			if (!_url && code) {
				_url = ebook.BookData.youtubeDefaultUrl.replace('(ID:)',code);
			}
			dat['target']=_url;
			break;
		case 'urllink':
		default:
			dat['target']=_url;
			break;
	}
	dat['mode']=_mode;
	$.ajax({
		'type': 'GET',
		'url': ans_url+'',
		'data': dat,
		'cache': false
	});
	if(typeof logLinkAccess !='undefined')logLinkAccess(pageNo, linkSeq);
}
function getResolution() {
	return screen.width + 'x' + screen.height;
}

loggingBookAccess=function() {
	var qs = getUrlVars();
	var pageNo = 1;
	if (typeof(qs['page']) != 'undefined') {
		pageNo = qs['page'];
	}

	$.ajax({
		type: 'GET',
		url: ans_url+'',
		data: {'mode': 'book', 'bookId': 89719, 'curPageNo': pageNo, 'resol': resol, 'eternalId': eternalId, 'sessionId': sessionId, 'referrer': referrer},
		cache: false
	});
}

function getUrlVars() {
	var vars = [], hash;
	var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
	for(var i = 0; i < hashes.length; i++) {
		hash = hashes[i].split('=');
		vars.push(hash[0]);
		vars[hash[0]] = hash[1];
	}
	return vars;
}

loggingPageAccess=function(pageNo) {
	var gaf=location.hostname + location.pathname +'?page='+pageNo;
	if(typeof gtag != 'undefined'){
		gtag('config', '', {'page_path':gaf});
	}else if(typeof ga != 'undefined'){
		ga('send', 'pageview', gaf);
	}
	$.ajax({
		type: 'GET',
		url: ans_url+'',
		data: {'mode': 'page', 'bookId': 89719, 'curPageNo': pageNo, 'resol': resol, 'eternalId': eternalId, 'sessionId': sessionId, 'referrer': referrer},
		cache: false
	});
	if(typeof logPageAccess !='undefined')logPageAccess(pageNo);
}
loggingZoomAccess=function(pageNo) {
	__ga_event('page_zoom', 'P.' + pageNo);

	$.ajax({
		type: 'GET',
		url: ans_url+'',
		data: {'mode': 'zoom', 'bookId': 89719, 'curPageNo': pageNo, 'eternalId': eternalId, 'sessionId': sessionId},
		cache: false
	});
	if(typeof logZoomAccess !='undefined')logZoomAccess(pageNo);
}
function __ga_event(evt_name,evt1){
	var ga_id='No Title';
	if(typeof gtag != 'undefined'){
		gtag('event', evt_name, {'event_category':ga_id, 'event_label': evt1});
	}else if(typeof ga != 'undefined'){
		ga('send', 'event', ga_id , evt_name, evt1);
	}
}

var mob_guideUrl='';
var cur_lang=(window.navigator.languages&&window.navigator.languages[0])||window.navigator.language||window.navigator.userLanguage||window.navigator.browserLanguage;
cur_lang=cur_lang.toLowerCase();
if(cur_lang=='ja'||cur_lang=='ja-jp'){
var hint_url='//www.ebook5.net/v2.1/bannerInfov5/?callback=?';
var local='ja';
mob_guideUrl='https://www.ebook5.net/summary/func.html#v5';
}else{
var hint_url='//www.ebook5.net/v2.1/bannerInfov5_en/?callback=?';
var local='en';
mob_guideUrl='https://www.ebook5.net/en/summary/func.html#v5';
}

if(cur_lang!='ja'&&cur_lang!='ja-jp'){
$(function(){
$('html').attr('lang', 'en');
$('#txt_bookmark_left').text('Bookmark Left');
$('#txt_bookmark_right').text('Bookmark Right');
$('#txt_print_both').text('Print Both');
$('#txt_print_left').text('Print Left');
$('#txt_print_right').text('Print Right');
$('#txt_download_all').text('Download All');
$('#txt_download_left').text('Download Left');
$('#txt_download_right').text('Download Right');
$('#icon_ebook5').attr('href','https://www.ebook5.net/en/');
$('#link_faq').attr('href','https://www.ebook5.net/en/summary/func.html#v5');
});
}


/** ebook_data
**********************************************************/
var ebook_data = {
	'pageTitleText': pagetitle,
	'pageTextContents': pageTextContents,
	'pageLinkContents': pageLinkContents,
	'pageImgPathList': pageImgPathList,
	'pageImgPathList_thumb': pageImgPathList_thumb,
	'pageImgPathList_large': pageImgPathList_large,
	'pageImgSize': pageImgSize,
	'pageImgSize_thumb': pageImgSize_thumb,
	'pageImgSize_large': pageImgSize_large,
	'use_pageSideToolbar': true,
	'pageTopDirectionIsLeft': true,
	'maxScaleX1' : true,
	'img_cmn_base_path':'/resources/v5/contents/image/cmn/',
	'PageChangeCallBack': function(pageNo) {
		loggingPageAccess(pageNo);
	},
	'PageZoomCallBack': function(pageNo) {
		loggingZoomAccess(pageNo);
	},
	'LinkClickCallBack': function(pageNo,linkSeq) {
		loggingLinkAccess(pageNo,linkSeq);
	},
	'ZoomNarrowRectCallBack': function(pg,rect){
		loggingViewRectAccess('narrow',pg,false,rect);
	},
	'ZoomWideRectCallBack': function(pg1,pg2,rect){
		loggingViewRectAccess('wide',pg1,pg2,rect);
	},
	'PageDragInfoCallback': function(pg1,pg2,pagepos,pagepos2,diftm,mode){
		/* mode = wide or narrow; */
		loggingPageDragPointAccess(mode=='wide'?'wide':'narrow',pg1,pg2,pagepos,diftm);
	},
	/**/
	'DownloadCallBack': function (pageNum/*0:all,1~:page */,url) {
		__ga_event('page_download',pageNum==0?'all':('P.'+pageNum));
	},
	'PrintPageCallBack': function(pg1,pg2/*0~*/){
		if(pg2< 0){
			__ga_event('page_print','P.'+(pg1+1));
		}else{
			if( pg1> pg2 ){
				var t=pg2;
				pg2=pg1;
				pg1=t;
			}
			__ga_event('page_print','P.'+(pg1+1)+',P.'+(pg2+1));
		}
	},
	'SearchKeywordCallBack': function(keyword){
		__ga_event('keyword_search',keyword);
	},
	'pageDummyImagePath': './resources/v5/contents/image/cmn/pagedummy.gif',
	'pageShadow' : false,
	'initLoadingThumbSkipEnable' : 1,
	'use_Download': false,
	'snsEnable': false,
	'use_TextView': false,
	'pageHintEnable': true,
	'linkFadeOpacity': 0,
	'local':local,
	'mob_guideUrl': mob_guideUrl,
	'pageHintInfoUrl':hint_url,
	d: 0
};
function __fixLinkClass(book){
	if( (book['pageLinkContents']||false) ){
		for(var p in book.pageLinkContents){
			if(book.pageLinkContents[p]){
				for(var idx in book.pageLinkContents[p]){
					if(!(book.pageLinkContents[p][idx]['class']||false))
						book.pageLinkContents[p][idx]['class']='linkmapclass';
					if(!(book.pageLinkContents[p][idx]['hoverclass']||false))
						book.pageLinkContents[p][idx]['hoverclass']='_clickhover';
				}
			}
		}
	}
}
__fixLinkClass(ebook_data);

$(document).on('readystatechange',function(){
	if (document.readyState=="complete") {
		ebook_data['loaded_time']=Date.now();
		var loadtime=ebook_data['loaded_time']-ebook_data['start_time'];
		$.get(ans_url+'?mode=load_time&load_time='+loadtime+'&bookId=89719');
	}
});
ebook_data['start_time']=Date.now();
