// JavaScript Document


// YouTube Player APIを読み込む
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
var ytPlayer = [];
var ytData = [{
    id: '9FRsXPnTr_0',
    area: 'player01'
  }, {
    id: 'Svc_gPxQUEI',
    area: 'player02'
  }, {
    id: 'ProgY2z4mg4',
    area: 'player03'
  }, {
    id: 'ooec-wEBZlA',
    area: 'player04'
  }, {
    id: '286d7SbdX5o',
    area: 'player05'
  }

];

// API読み込み後に、各エリアにプレーヤーを埋め込む
function onYouTubeIframeAPIReady() {
  for (var i = 0; i < ytData.length; i++) {
    ytPlayer[i] = new YT.Player(ytData[i]['area'], {
      videoId: ytData[i]['id'],
      events: {
        onReady: function (evt) {
          // 再生スピードの設定 0.5 ~ 2まではいる
          evt.target.setPlaybackRate(2);
        }
      }
    });
  }
}
