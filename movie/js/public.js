(function() {
    var data = [{
        src: 'img/banner_5.jpg',
        href: 'https://www.iqiyi.com/v_19rr7pi4k4.html?src=focustext_1_20130410_1',
        title: "狄仁杰之四大天王",
        p: '赵又廷破幻术奇案'
    }, {
        src: 'img/banner_1.jpg',
        href: 'https://www.iqiyi.com/v_19rr7pi4k4.html?src=focustext_1_20130410_2',
        title: "神奇马戏团之动物饼干",
        p: '萌想由你想变就变'
    }, {
        src: 'img/banner_2.jpg',
        href: 'https://www.iqiyi.com/v_19rr7pi4k4.html?src=focustext_1_20130410_3',
        title: "007：幽灵党",
        p: '传奇英雄背水一战'
    }, {
        src: 'img/banner_3.jpg',
        href: 'https://www.iqiyi.com/v_19rr7pi4k4.html?src=focustext_1_20130410_4',
        title: "英伦对决",
        p: '成龙对决“007”'
    }, {
        src: 'img/banner_10.jpg',
        href: 'https://www.iqiyi.com/v_19rr7pi4k4.html?src=focustext_1_20130410_5',
        title: "爱奇艺爱电影：蚁人2：黄蜂女现身",
        p: '蚁人复联后再现身'
    }, {
        src: 'img/banner_7.jpg',
        href: 'https://www.iqiyi.com/v_19rr7pi4k4.html?src=focustext_1_20130410_6',
        title: "霍比特人系列",
        p: '世界魔幻大战来袭'
    }, {
        src: 'img/banner_6.jpg',
        href: 'https://www.iqiyi.com/v_19rr7pi4k4.html?src=focustext_1_20130410_7',
        title: "神探风云",
        p: '爆裂神探除恶追凶'
    }, {
        src: 'img/banner_4.jpg',
        href: 'https://www.iqiyi.com/v_19rr7pi4k4.html?src=focustext_1_20130410_8',
        title: "超级英雄集结",
        p: '蚁人回归！'
    }, {
        src: 'img/banner_8.jpg',
        href: 'https://www.iqiyi.com/v_19rr7pi4k4.html?src=focustext_1_20130410_9',
        title: "机甲神七",
        p: '彭禺厶变身钢铁侠'
    }, {
        src: 'img/banner_9.jpg',
        href: 'https://www.iqiyi.com/v_19rr7pi4k4.html?src=focustext_1_20130410_10',
        title: "幸福马上来",
        p: '冯巩刘昊然父子档'
    }];

    var banner = U.getId('banner');
    var timer = null;
    var n = 0;

    // 创建ul
    var oUl = U.create('ul');
    oUl.className = 'bannerUl';
    for (var i = 0; i < data.length; i++) {
        var oLi = U.create('li');

        if (i === 0) {
            oLi.className = 'bannerLi zindex';
        } else {
            oLi.className = 'bannerLi';
        }


        oLi.innerHTML = '<a href="' + data[i].href + '"target="_blank" class="bannerLi_a"></a>';
        oLi.style.backgroundImage = 'url(' + data[i].src + ')';
        oUl.appendChild(oLi);
    }
    banner.appendChild(oUl);

    // 创建右按钮
    var oSpanRight = U.create('span');
    oSpanRight.className = 'iconfont icon-arrow-left-line';
    U.append(banner, oSpanRight);
    // 创建左按钮
    var oSpanLeft = U.create('span');
    oSpanLeft.className = 'iconfont icon-jiantou';
    U.append(banner, oSpanLeft);

    // 创建页码
    var oP = U.create('p');
    oP.className = 'bannerPage';
    for (var i = 0; i < data.length; i++) {
        oA = U.create('a');
        if (i === 0) {
            oA.className = 'bannerPage_a orange';
        } else {
            oA.className = 'bannerPage_a';
        }

        U.append(oP, oA);
    }
    U.append(banner, oP);

    // 创建标题
    var oTitle = U.create('a');
    oTitle.className = 'bannerLi_title';
    var oTitleI = U.create('i');
    oTitleI.className = 'bannerLi_titleI';
    U.append(oTitle, oTitleI);
    var oTitleH4 = U.create('h4');
    oTitleH4.className = 'bannerLi_titleH4';
    oTitleH4.innerHTML = data[0].title;
    U.append(oTitle, oTitleH4);
    var oTitleP = U.create('p');
    oTitleP.className = 'bannerLi_titleP';
    oTitleP.innerHTML = data[0].p;
    U.append(oTitle, oTitleP);
    U.append(banner, oTitle);

    // 获取元素
    var aLi = banner.getElementsByTagName('li');
    var aSpan = banner.getElementsByTagName('span');
    var oPageA = oP.getElementsByTagName('a');

    timer = setInterval(auto, 2000);

    // 滑上暂停
    banner.onmouseover = function() {
        clearInterval(timer);
    }

    // 滑离开始
    banner.onmouseout = function() {
        timer = setInterval(auto, 2000);

    }

    // 上一张
    aSpan[0].onclick = function() {
        n--;
        if (n < 0) {
            n = aLi.length - 1;
        }
        animation();
    }

    // 下一张
    aSpan[1].onclick = function() {
        auto();
    }

    // 滑上页码跳页
    for (var i = 0; i < oPageA.length; i++) {
        oPageA[i].index = i;
        oPageA[i].onmouseover = function() {
            n = this.index;
            animation();
        }
    }

    function auto() {
        n++;
        if (n >= aLi.length) {
            n = 0;
        }
        animation();
    }

    function animation() {
        for (var i = 0; i < data.length; i++) {
            aLi[i].style.zIndex = 0;
            oPageA[i].className = 'bannerPage_a';
            U.move(aLi[i], {
                opacity: 0
            });
        }
        aLi[n].style.zIndex = 1;
        oTitleH4.innerHTML = data[n].title;
        oTitleP.innerHTML = data[n].p;
        oTitle.href = data[n].href;
        oPageA[n].className = 'bannerPage_a orange';
        U.move(aLi[n], {
            opacity: 100
        });
    }
})();