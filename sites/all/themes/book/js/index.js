$(function(){
	jQuery(".nav").slide({
		type: "menu",
		titCell: ".first",
		targetCell: ".sub",
		effect: "slideDown",
		delayTime: 300,
		triggerTime: 0,
		returnDefault: true
	});
	
	$(".banner").slide({
		mainCell: ".bd ul",
		effect: "leftLoop",
		autoPlay: true
	});

	//tab切换
	function fnTab(oNav, aCon) {
        var aElem = oNav.children();
        aCon.hide().eq(0).show();
        aElem.each(function (index) {
            $(this).on('click', function () {
                aElem.removeClass('on');
                $(this).addClass('on');
                aCon.hide().eq(index).show();
            });
        });
    };
    fnTab($('.navList ul'), $('.tabContent'));

	//精品活动hover效果
	$(".tabContent li").hover(function() {
		$(this).find(".bg").stop(false, false).animate({bottom: 0},450);
		$(this).find(".text").stop(false, false).animate({bottom: 0},450);
		$(this).find("img").stop(false, false).animate({top: -15,opacity: 0.7},450);
	},function(){
		$(this).find(".bg").stop(false, false).animate({bottom: -40},450);
		$(this).find(".text").stop(false, false).animate({bottom: -40},450);
		$(this).find("img").stop(false, false).animate({top: 0,opacity: 1},450);

	});

	//边框的一入一出效果
	$('.partnerList li').hover(
		function () {
		var obj = $(this);
		borderIn(obj);
		},
		function () {
		var obj = $(this);
		borderOut(obj);
		}
	);
	//边框效果--移入
	function borderIn(obj){
		$(obj).find('.borderLeft').stop(true).animate({ height:'127px' },300)
		$(obj).find('.borderBottom').stop(true).delay(300).animate({ width:'127px' },300)
		$(obj).find('.borderRight').stop(true).animate({ height:'127px' },300)
		$(obj).find('.borderTop').stop(true).delay(300).animate({ width:'127px' },300)
	};
	//边框效果--移出
	function borderOut(obj){
		$(obj).find('.borderLeft').stop(true).delay(100).animate({ height:'0px' },100)
		$(obj).find('.borderBottom').stop(true).animate({ width:'0px' },100)
		$(obj).find('.borderRight').stop(true).delay(100).animate({ height:'0px' },100)
		$(obj).find('.borderTop').stop(true).animate({ width:'0px' },100)
	};

	selectItem();
	//搜索框
	function selectItem() {
		var selects = $('select'); //获取select
		for(var i = 0; i < selects.length; i++) {
			createSelect(selects[i], i);
		}
		function createSelect(select_container, index) {
			//创建select容器，class为select_box，插入到select标签前
			var tag_select = $('<div></div>'); //div相当于select标签
			tag_select.attr('class', 'select_box');
			tag_select.insertBefore(select_container);
			//显示框class为select_showbox,插入到创建的tag_select中
			var select_showbox = $('<div></div>'); //显示框
			select_showbox.css('cursor', 'pointer').attr('class', 'select_showbox').appendTo(tag_select);
			//创建option容器，class为select_option，插入到创建的tag_select中
			var ul_option = $('<ul></ul>'); //创建option列表
			ul_option.attr('class', 'select_option');
			ul_option.appendTo(tag_select);
			createOptions(index, ul_option); //创建option
			//点击显示框
			tag_select.toggle(function() {
				ul_option.show();
				ul_option.parent().find(".select_showbox").addClass("active");
			}, function() {
				ul_option.hide();
				ul_option.parent().find(".select_showbox").removeClass("active");
			});
			var li_option = ul_option.find('li');
			li_option.on('click', function() {
				$(this).addClass('selected').siblings().removeClass('selected');
				var value = $(this).text();
				select_showbox.text(value);
				ul_option.hide();
			});
			li_option.hover(function() {
				$(this).addClass('hover').siblings().removeClass('hover');
			}, function() {
				li_option.removeClass('hover');
			});
		}
		function createOptions(index, ul_list) {
			//获取被选中的元素并将其值赋值到显示框中
			var options = selects.eq(index).find('option'),
				selected_option = options.filter(':selected'),
				selected_index = selected_option.index(),
				showbox = ul_list.prev();
				showbox.text(selected_option.text());

			//为每个option建立个li并赋值
			for(var n = 0; n < options.length; n++) {
				var tag_option = $('<li></li>'), //li相当于option
					txt_option = options.eq(n).text();
				tag_option.text(txt_option).appendTo(ul_list);

				//为被选中的元素添加class为selected
				if(n == selected_index) {
					tag_option.attr('class', 'selected');
				}
			}
		}
	}
});
