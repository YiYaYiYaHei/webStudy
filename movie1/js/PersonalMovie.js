(function() {
    var dataMov = [{
        src: 'img/pic_1.jpg',
        href: 'https://www.iqiyi.com/v_19rrk4rt9g.html',
        title: '超能陆战队',
        p: '挑你所爱',
        gradeFirst: '8',
        gradeLast: '.9'
    }, {
        src: 'img/pic_2.jpg',
        href: 'https://www.iqiyi.com/v_19rrk4rt9g.html',
        title: '超能陆战队',
        p: '挑你所爱',
        gradeFirst: '8',
        gradeLast: '.9'
    }, {
        src: 'img/pic_3.jpg',
        href: 'https://www.iqiyi.com/v_19rra8bxfs.html',
        title: '超能陆战队',
        p: '挑你所爱',
        gradeFirst: '8',
        gradeLast: '.9'
    }, {
        src: 'img/pic_4.jpg',
        href: 'https://www.iqiyi.com/v_19rrk4rt9g.html',
        title: '超能陆战队',
        p: '挑你所爱',
        gradeFirst: '8',
        gradeLast: '.9'
    }, {
        src: 'img/pic_5.jpg',
        href: 'https://www.iqiyi.com/v_19rrk4rt9g.html',
        title: '超能陆战队',
        p: '挑你所爱',
        gradeFirst: '8',
        gradeLast: '.9'
    }, {
        src: 'img/pic_6.jpg',
        href: 'https://www.iqiyi.com/v_19rrk4rt9g.html',
        title: '超能陆战队',
        p: '挑你所爱',
        gradeFirst: '8',
        gradeLast: '.9'
    }, {
        src: 'img/pic_7.jpg',
        href: 'https://www.iqiyi.com/v_19rrk4rt9g.html',
        title: '超能陆战队',
        p: '挑你所爱',
        gradeFirst: '8',
        gradeLast: '.9'
    }, {
        src: 'img/pic_8.jpg',
        href: 'https://www.iqiyi.com/v_19rrk4rt9g.html',
        title: '超能陆战队',
        p: '挑你所爱',
        gradeFirst: '8',
        gradeLast: '.9'
    }, {
        src: 'img/pic_9.jpg',
        href: 'https://www.iqiyi.com/v_19rrk4rt9g.html',
        title: '超能陆战队',
        p: '挑你所爱',
        gradeFirst: '8',
        gradeLast: '.9'
    }, {
        src: 'img/pic_10.jpg',
        href: 'https://www.iqiyi.com/v_19rrk4rt9g.html',
        title: '超能陆战队',
        p: '挑你所爱',
        gradeFirst: '8',
        gradeLast: '.9'
    }, {
        src: 'img/pic_11.jpg',
        href: 'https://www.iqiyi.com/v_19rrk4rt9g.html',
        title: '超能陆战队',
        p: '挑你所爱',
        gradeFirst: '8',
        gradeLast: '.9'
    }, {
        src: 'img/pic_12.jpg',
        href: 'https://www.iqiyi.com/v_19rrk4rt9g.html',
        title: '超能陆战队',
        p: '挑你所爱',
        gradeFirst: '8',
        gradeLast: '.9'
    }, {
        src: 'img/pic_13.jpg',
        href: 'https://www.iqiyi.com/v_19rrk4rt9g.html',
        title: '超能陆战队',
        p: '挑你所爱',
        gradeFirst: '8',
        gradeLast: '.9'
    }, {
        src: 'img/pic_14.jpg',
        href: 'https://www.iqiyi.com/v_19rrk4rt9g.html',
        title: '超能陆战队',
        p: '挑你所爱',
        gradeFirst: '8',
        gradeLast: '.9'
    }, {
        src: 'img/pic_15.jpg',
        href: 'https://www.iqiyi.com/v_19rrk4rt9g.html',
        title: '超能陆战队',
        p: '挑你所爱',
        gradeFirst: '8',
        gradeLast: '.9'
    }, {
        src: 'img/pic_16.jpg',
        href: 'https://www.iqiyi.com/v_19rrk4rt9g.html',
        title: '超能陆战队',
        p: '挑你所爱',
        gradeFirst: '8',
        gradeLast: '.9'
    }, {
        src: 'img/pic_17.jpg',
        href: 'https://www.iqiyi.com/v_19rrk4rt9g.html',
        title: '超能陆战队',
        p: '挑你所爱',
        gradeFirst: '8',
        gradeLast: '.9'
    }, {
        src: 'img/pic_18.jpg',
        href: 'https://www.iqiyi.com/v_19rrk4rt9g.html',
        title: '超能陆战队',
        p: '挑你所爱',
        gradeFirst: '8',
        gradeLast: '.9'
    }, {
        src: 'img/pic_19.jpg',
        href: 'https://www.iqiyi.com/v_19rrk4rt9g.html',
        title: '超能陆战队',
        p: '挑你所爱',
        gradeFirst: '8',
        gradeLast: '.9'
    }, {
        src: 'img/pic_20.jpg',
        href: 'https://www.iqiyi.com/v_19rrk4rt9g.html',
        title: '超能陆战队',
        p: '挑你所爱',
        gradeFirst: '8',
        gradeLast: '.9'
    }];

    var oContentMov = document.getElementById('contentPersonalMov');
    var oContentMovBox = oContentMov.getElementsByTagName('div')[0];
    var imgBg = document.getElementById('contentPerMovBg');
    var arrLi = []; //存储li元素，提高性能
    var arrLiInfor = []; //存储Li位置信息
    var oA = []; //存储a标签（标题和链接）


    // 创建Ul
    var oUl = U.create('ul');
    oUl.className = 'contentPerMovBox_ul';
    for (var i = 0; i < dataMov.length; i++) {
        var oLi = U.create('li');
        oLi.innerHTML = ' <img src=' + dataMov[i].src + '><a href=' + dataMov[i].href + ' target="_blank">' + dataMov[i].title + '</a><p>' + dataMov[i].p + '</p><i>' + dataMov[i].gradeFirst + '</i><i>' + dataMov[i].gradeLast + '</i>';
        if (i >= 5) {
            oLi.style.display = 'none';
        }
        oLi.setAttribute('datahref', dataMov[i].href)
        arrLi[i] = oLi;
        oA[i] = oLi.getElementsByTagName('a')[0];
        U.append(oUl, oLi);
    }
    U.append(oContentMovBox, oUl);
    console.log(oA);

    // 创建左按钮
    var oContentMovBoxLeft = U.create('span');
    oContentMovBoxLeft.className = 'iconfont icon-arrow-left-line';
    U.append(oContentMovBox, oContentMovBoxLeft);

    // 创建右按钮
    var oContentMovBoxRight = U.create('span');
    oContentMovBoxRight.className = 'iconfont icon-jiantou';
    U.append(oContentMovBox, oContentMovBoxRight);

    // 存储前五个li的位置信息，为移动时提供位置
    for (var i = 0; i < 5; i++) {
        var o = arrLi[i];
        arrLiInfor.push({
            left: parseFloat(U.getStyle(o, 'left')),
            top: parseFloat(U.getStyle(o, 'top')),
            width: parseFloat(U.getStyle(o, 'width')),
            height: parseFloat(U.getStyle(o, 'height')),
            zIn: parseFloat(U.getStyle(o, 'z-index'))
        })
    }

    change(arrLi); //一开始就调用，给初识的1-5张图加索引或者在创建ul时给个else为他们加索引

    //上一张，把后面的图放前面
    oContentMovBoxLeft.onclick = function() {
        arrLi.unshift(arrLi.pop());
        oA.unshift(oA.pop());
        change(arrLi);
    }

    // 下一张，把前面的图放后面
    oContentMovBoxRight.onclick = function() {
        arrLi.push(arrLi.shift());
        oA.push(oA.shift());
        change(arrLi);
    }

    // 点击移动
    for (var i = 0; i < arrLi.length; i++) {
        arrLi[i].onclick = function() {
            switch (this.getAttribute('index')) {
                case '0': //点击第一张图移到中间位置，因为getAttribute得到的是字符串
                    // 把后面的图放前面
                    arrLi.unshift(arrLi.pop());
                    oA.unshift(oA.pop());
                    arrLi.unshift(arrLi.pop());
                    oA.unshift(oA.pop());
                    change(arrLi);
                    break;
                case '1':
                    arrLi.unshift(arrLi.pop());
                    oA.unshift(oA.pop());
                    change(arrLi);
                    break;
                case '2':
                    open(this.getAttribute('datahref'));
                    break;
                case '3':
                    // 把前面的图放后面
                    arrLi.push(arrLi.shift());
                    oA.push(oA.shift());
                    change(arrLi);
                    break;
                case '4':
                    arrLi.push(arrLi.shift());
                    oA.push(oA.shift());
                    arrLi.push(arrLi.shift());
                    oA.push(oA.shift());
                    change(arrLi);
                    break;
            }
        }
    }

    function change(arrLi) {
        var oImg = arrLi[2].getElementsByTagName('img')[0];
        imgBg.src = oImg.src; //修改背景图片

        // 滑上标题变色
        arrLi[2].onmouseover = function() {
            oA[2].className = 'green';
        }

        //滑离标题变色
        arrLi[2].onmouseout = function() {
            oA[2].className = '';
        }

        for (var i = 0; i < arrLi.length; i++) {
            var a = arrLi[i];
            var oI = a.getElementsByTagName('img')[0];

            if (i < 5) {
                a.setAttribute('index', i);
                a.style.zIndex = arrLiInfor[i].zIn;
                a.style.display = 'block';
                oI.style.width = arrLiInfor[i].width + 'px';
                oI.style.height = arrLiInfor[i].height + 'px';
                U.move(a, {
                    left: arrLiInfor[i].left,
                    top: arrLiInfor[i].top,
                    width: arrLiInfor[i].width,
                    height: arrLiInfor[i].height
                });
            } else {
                a.removeAttribute('index'); //保证永远都是前五张有索引
                a.style.display = 'none';
                a.style.width = '480px';
                a.style.height = '270px';
                a.style.left = '465.5px';
                a.style.top = '0';
                a.style.zIndex = 0;
            }

            // var w; //存储img的宽度，因为滑离需要，但如果滑离在获取样式的话，此时已经被修改
            // var h;

            // // 滑上放大
            // oI.onmouseover = function() {
            //     var ImgW = parseFloat(this.style.width);
            //     // w = ImgW; //存储未放大的照片宽度
            //     var ImgH = parseFloat(this.style.height);
            //     // h = ImgH;
            //     U.move(this, {
            //         width: ImgW + 50,
            //         height: ImgH + 50
            //     });
            // }

            // 滑离正常
            // oI.onmouseout = function() {
            //     var ImgW = parseFloat(this.style.width);
            //     var ImgH = parseFloat(this.style.height);
            //     U.move(this, {
            //         width: ImgW,
            //         height: ImgH,
            //     });

            // }

        }
    }
})();