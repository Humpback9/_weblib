/**
 * 마우스 오른쪽, 드레그, 셀렉트 막기
 */
document.oncontextmenu = function () {
    //alert("오른쪽버튼을 이용할 수 없습니다...");
    return false;
};
window.addEventListener('contextmenu', function (e) {
    // Not compatible with IE < 9
    e.preventDefault();
}, false);
document.ondragstart = function () {
    return false;
};
document.onselectstart = function () {
    return false;
};
// f12 방지
body.on('keydown', function(e){
    if(e.keyCode === 123){
        e.preventDefault();
    }else{}
});
