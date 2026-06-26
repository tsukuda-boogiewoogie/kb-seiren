$(function () {	
	$('select#select_cat, #searchTblWrap p em').hide();
	
	
	$('select#select_cat').val("");
	$('input#search_cat').val("");
	$('select#select_cat').bind('change', function() {
		$('input#search_cat').val($('select#select_cat option:selected').val());
		$('input#search_cat').focus();
	});
	$('input#search_cat').quicksearch('.searchTbl tr', {
		'loader':'.loading',
		'delay':300,
		'bind': 'focus'
	});
	
	$('select#select_com').val("");
	$('input#search_com').val("");
	$('.searchTbl tr').fadeOut();
	$('#noresults').fadeOut();
	$('select#select_com').bind('change', function() {
		$('input#search_com').val($('select#select_com option:selected').val());
		$('input#search_com').focus();
		$('select#select_cat').fadeIn();
	});
	$('input#search_com').quicksearch('.searchTbl tr', {
		'loader':'.loading',
		'delay':300,
		'bind': 'focus'
	});

	
	$('select#select_type').val("");
	$('input#search_type').val("");
	$('select#select_type').bind('change', function() {
		$('input#search_type').val($('select#select_type option:selected').val());
		$('input#search_type').focus();
	});
	$('input#search_type').quicksearch('.searchTbl tr', {
		'loader':'.loading',
		'delay':300,
		'bind': 'focus'
	});
	
	$('input#searchReset, .resetBtn').click(function() {
		$('select#select_cat').fadeOut();
		$('input#search_key').val("");
		$('select#select_cat').val("");
		$('input#search_cat').val("");
		$('select#select_com').val("");
		$('input#search_com').val("");
		$('select#select_type').val("");
		$('input#search_type').val("");
		
		$('.searchTbl tr').fadeOut();
		$('#noresults').fadeOut();
	});
	
	var c = [
		
		{ state: 'デフォルト', city: '←まず大分類を選んでください' },
		
		{ state: '水分特性', city: '水分特性すべて' },
		{ state: '水分特性', city: '吸水・速乾・通気性' },
    { state: '水分特性', city: '透湿・防水・撥水・防風' },
		
    { state: '光熱特性', city: '光熱特性すべて' },
    { state: '光熱特性', city: '蓄熱・保温' },
    { state: '光熱特性', city: '遮光・遮熱・UVカット' },
    { state: '光熱特性', city: '防透' },
		{ state: '光熱特性', city: '冷感' },
		{ state: '光熱特性', city: '防融' },
		{ state: '光熱特性', city: '光透過性' },
		
		{ state: '衛生特性', city: '衛生特性すべて' },
		{ state: '衛生特性', city: '抗菌・防臭' },
		{ state: '衛生特性', city: '制菌' },
		{ state: '衛生特性', city: '消臭' },
		{ state: '衛生特性', city: '通気性(衛生)' },
		
		{ state: '電気特性', city: '電気特性すべて' },
		{ state: '電気特性', city: '導電・制電' },
		{ state: '電気特性', city: '低誘電' },
		{ state: '電気特性', city: '絶縁性' },
		
		{ state: '化学特性', city: '化学特性すべて' },
		{ state: '化学特性', city: '難燃' },
		{ state: '化学特性', city: '耐薬品性' },
		{ state: '化学特性', city: '耐加水分解' },
		{ state: '化学特性', city: '耐熱性' },
		
		{ state: '物理特性', city: '物理特性すべて' },
		{ state: '物理特性', city: '高強度' },
		{ state: '物理特性', city: '高弾性' },
		{ state: '物理特性', city: '振動減衰' },
		{ state: '物理特性', city: '低線膨張' },
		{ state: '物理特性', city: '耐切創性' },
		
		{ state: 'ファッション性', city: 'ファッション性すべて' },
		{ state: 'ファッション性', city: '表面効果' },
		{ state: 'ファッション性', city: '手触り・風合い' },
		{ state: 'ファッション性', city: '伸縮性' },
		
		{ state: '取扱い性', city: '取扱い性すべて' },
		{ state: '取扱い性', city: '滑脱防止' },
		{ state: '取扱い性', city: '熱融着' },
		{ state: '取扱い性', city: '易染' },
		{ state: '取扱い性', city: '易溶解性' },
		{ state: '取扱い性', city: '低発塵' },
		
		{ state: 'モノフィラメント', city: 'モノフィラメントすべて' },
		{ state: '軽量・細繊度', city: '軽量・細繊度すべて' },
		
		{ state: 'ベリーマXシリーズ', city: 'ベリーマXシリーズすべて' },
		{ state: 'ベリーマXシリーズ', city: '工業用途' },
		{ state: 'ベリーマXシリーズ', city: '衣料・資材用途' },
		
		{ state: 'その他', city: '該当なし' }
  ];

  $('#select_com').change(function(){
    setCitySelect($(this).val());
  });

  function setCitySelect(s){
    $('#select_cat').find('option').remove();
    $(c).each(function(i){
      if(c[i].state == s){
        $('#select_cat').append($('<option></option>')
          .attr('state', c[i].state)
          .val(c[i].city)
          .text(c[i].city));
        }
      }
    );

  }

  setCitySelect('');

});


$(document).ready( function() {
  $('.hideBlock').hide();
	$('.searchTbl tr').css({'display':'none'});
});


$(document).ready(function () {	
	$('input#search_key').val(""); 

   $('#mySubmit').click(function () { 
	 		$('.searchTbl tr').hide()
			{
				$('input#search_key').quicksearch('.searchTbl tr' , {
				 'selector':'p',
					'loader':'.loading',
					//'noResults': '#noresults',
	 				'delay':300
			});
				}
			;
	 		
			$('#noresults').fadeOut(100);
			$('#noresults').fadeIn(600);
			
    });
});