(function() {
    dataCB = [{
        src: 'img/slide_1.jpg',
        title: '狄仁杰之四大天王',
        introduce: '赵又廷破幻术奇案',
        grade: '8.0',
        href: 'https://www.iqiyi.com/v_19rr7pi4k4.html#vfrm=19-9-0-1'
    }, {
        src: 'img/slide_2.jpg',
        title: '狄仁杰之四大天王',
        introduce: '赵又廷破幻术奇案',
        grade: '8.0',
        href: 'https://www.iqiyi.com/v_19rr7pi4k4.html#vfrm=19-9-0-1'
    }, {
        src: 'img/slide_3.jpg',
        title: '狄仁杰之四大天王',
        introduce: '赵又廷破幻术奇案',
        grade: '8.0',
        href: 'https://www.iqiyi.com/v_19rr7pi4k4.html#vfrm=19-9-0-1'
    }, {
        src: 'img/slide_4.jpg',
        title: '狄仁杰之四大天王',
        introduce: '赵又廷破幻术奇案',
        grade: '8.0',
        href: 'https://www.iqiyi.com/v_19rr7pi4k4.html#vfrm=19-9-0-1'
    }, {
        src: 'img/slide_5.jpg',
        title: '狄仁杰之四大天王',
        introduce: '赵又廷破幻术奇案',
        grade: '8.0',
        href: 'https://www.iqiyi.com/v_19rr7pi4k4.html#vfrm=19-9-0-1'
    }, {
        src: 'img/slide_6.jpg',
        title: '狄仁杰之四大天王',
        introduce: '赵又廷破幻术奇案',
        grade: '8.0',
        href: 'https://www.iqiyi.com/v_19rr7pi4k4.html#vfrm=19-9-0-1'
    }, {
        src: 'img/slide_7.jpg',
        title: '狄仁杰之四大天王',
        introduce: '赵又廷破幻术奇案',
        grade: '8.0',
        href: 'https://www.iqiyi.com/v_19rr7pi4k4.html#vfrm=19-9-0-1'
    }, {
        src: 'img/slide_8.jpg',
        title: '狄仁杰之四大天王',
        introduce: '赵又廷破幻术奇案',
        grade: '8.0',
        href: 'https://www.iqiyi.com/v_19rr7pi4k4.html#vfrm=19-9-0-1'
    }, {
        src: 'img/slide_9.jpg',
        title: '狄仁杰之四大天王',
        introduce: '赵又廷破幻术奇案',
        grade: '8.0',
        href: 'https://www.iqiyi.com/v_19rr7pi4k4.html#vfrm=19-9-0-1'
    }, {
        src: 'img/slide_10.jpg',
        title: '狄仁杰之四大天王',
        introduce: '赵又廷破幻术奇案',
        grade: '8.0',
        href: 'https://www.iqiyi.com/v_19rr7pi4k4.html#vfrm=19-9-0-1'
    }, {
        src: 'img/slide_11.jpg',
        title: '狄仁杰之四大天王',
        introduce: '赵又廷破幻术奇案',
        grade: '8.0',
        href: 'https://www.iqiyi.com/v_19rr7pi4k4.html#vfrm=19-9-0-1'
    }, {
        src: 'img/slide_12.jpg',
        title: '狄仁杰之四大天王',
        introduce: '赵又廷破幻术奇案',
        grade: '8.0',
        href: 'https://www.iqiyi.com/v_19rr7pi4k4.html#vfrm=19-9-0-1'
    }, {
        src: 'img/slide_13.jpg',
        title: '狄仁杰之四大天王',
        introduce: '赵又廷破幻术奇案',
        grade: '8.0',
        href: 'https://www.iqiyi.com/v_19rr7pi4k4.html#vfrm=19-9-0-1'
    }, {
        src: 'img/slide_14.jpg',
        title: '狄仁杰之四大天王',
        introduce: '赵又廷破幻术奇案',
        grade: '8.0',
        href: 'https://www.iqiyi.com/v_19rr7pi4k4.html#vfrm=19-9-0-1'
    }, {
        src: 'img/slide_15.jpg',
        title: '狄仁杰之四大天王',
        introduce: '赵又廷破幻术奇案',
        grade: '8.0',
        href: 'https://www.iqiyi.com/v_19rr7pi4k4.html#vfrm=19-9-0-1'
    }, {
        src: 'img/slide_16.jpg',
        title: '狄仁杰之四大天王',
        introduce: '赵又廷破幻术奇案',
        grade: '8.0',
        href: 'https://www.iqiyi.com/v_19rr7pi4k4.html#vfrm=19-9-0-1'
    }, {
        src: 'img/slide_17.jpg',
        title: '狄仁杰之四大天王',
        introduce: '赵又廷破幻术奇案',
        grade: '8.0',
        href: 'https://www.iqiyi.com/v_19rr7pi4k4.html#vfrm=19-9-0-1'
    }, {
        src: 'img/slide_18.jpg',
        title: '狄仁杰之四大天王',
        introduce: '赵又廷破幻术奇案',
        grade: '8.0',
        href: 'https://www.iqiyi.com/v_19rr7pi4k4.html#vfrm=19-9-0-1'
    }];

    var conCBBest = U.getClass('contentChinaBest');

    for (var i = 0; i < conCBBest.length; i++) {
        slide(conCBBest[i], dataCB)
    }

    function slide(conCBBest, dataCB) {
        var conCB = U.getClass(conCBBest, 'conCBBox')[0];
        var titleBox = U.getClass(conCBBest, 'conCBestTitleBox')[0];
        var seeWidth = document.documentElement.clientWidth; //获取可视宽
        if (seeWidth > 1900) {
            seeWidth = 1900;
        }
        var liWidth = 215; //一个li的宽度

        var len = dataCB.length; //数据长度
        var maxLen = Math.floor(seeWidth / liWidth); //一屏可放多少张图
        conCB.style.width = maxLen * liWidth - 5 + 'px'; //获取conCB的宽度
        titleBox.style.width = maxLen * liWidth - 5 + 'px';
        var lastLen = len % maxLen //最后一屏可存放的图片
        var count = Math.ceil(len / maxLen); //能放多少屏

        var arrLi = []; //存储li
        var n = 0; //运动的屏数
        var moveWidth = 0; //移动的宽度

        //  创建ul
        var oUl = U.create('ul');
        oUl.className = 'contentChinaBest_ul';
        for (var i = 0; i < dataCB.length; i++) {
            var oLi = U.create('li');
            oLi.innerHTML = `<img src=${dataCB[i].src}><h5>${dataCB[i].title}</h5><p>${dataCB[i].introduce}</p><span>${dataCB[i].grade}</span>`;
            oLi.setAttribute('href', dataCB[i].href);
            arrLi[i] = oLi;
            U.append(oUl, oLi);
        }
        U.append(conCB, oUl);
        oUl.style.width = liWidth * dataCB.length + 'px';

        // 创建左按钮
        var oSpanLeft = U.create('span');
        oSpanLeft.className = 'iconfont icon-arrow-left-line';
        U.append(conCB, oSpanLeft);

        // 创建右按钮
        var oSpanRight = U.create('span');
        oSpanRight.className = 'iconfont icon-jiantou';
        U.append(conCB, oSpanRight);


        // 上一屏
        oSpanLeft.onclick = function() {
            n--;
            if (n <= 0) {
                n = 0;
                oSpanLeft.style.display = 'none';
            }
            moveWidth = n * maxLen;
            oSpanRight.style.display = 'block';
            U.move(oUl, {
                left: -moveWidth * liWidth
            });
        }


        // 下一屏
        oSpanRight.onclick = function() {
            oSpanLeft.style.display = 'block';
            n++;
            if (n >= count - 1) {
                //存在最后一屏
                if (lastLen) {
                    moveWidth = (n - 1) * maxLen + lastLen;
                } else {
                    moveWidth = n * maxLen;
                }
                // 右按钮影藏
                oSpanRight.style.display = 'none';
            } else {
                moveWidth = n * maxLen;
            }
            U.move(oUl, {
                left: -moveWidth * liWidth
            });
        }

        // 点击打开链接
        for (var i = 0; i < arrLi.length; i++) {
            arrLi[i].setAttribute('index', i);
            arrLi[i].onclick = function() {
                open(dataCB[this.getAttribute('index')].href);
            }
        }


        var timer = null; //加定时器是因为防止鼠标在浏览页面时，使div显现，而是鼠标停留该位置0.5秒后显现
        var divArr = []; //将创建的div放入，在滑离时清空该数组，避免当鼠标滑离时，滑上事件还未执行完成而导致滑离div不能被删除
        for (var i = 0; i < arrLi.length; i++) {
            //滑上创建div
            arrLi[i].onmouseenter = function() {
                var that = this;
                this.timer = setTimeout(function() {
                    var oDiv = U.create('div');
                    oDiv.innerHTML = `<img src=${dataCB[that.getAttribute('index')].src}>`;
                    oDiv.className = 'conBoxLi';
                    var leftPos = U.getPos(that); //getPos获取的是元素据页面的距离
                    oDiv.style.left = leftPos.left + 'px';
                    oDiv.style.top = leftPos.top + 'px';
                    U.append(document.body, oDiv);
                    divArr.push(oDiv);

                    U.move(oDiv, {
                        width: 250,
                        height: 350,
                        left: leftPos.left - 20,
                        top: leftPos.top - 12
                    });

                    // 滑离删除div 
                    oDiv.onmouseleave = function() {
                        var j = divArr.indexOf(oDiv);
                        if (j !== -1) {
                            U.remove(divArr.splice(j, 1)[0]);
                        }

                    }
                }, 1000);
            }

            //滑离li清除定时器
            arrLi[i].onmouseleave = function() {
                clearTimeout(this.timer);
            }
        }
    }
})();