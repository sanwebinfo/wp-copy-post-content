window.addEventListener('DOMContentLoaded', event => {
const clipboard = new ClipboardJS('.copybtn');
clipboard.on('success', function(e) {
    e.clearSelection();
    e.trigger.innerHTML = '<b>&#8594; Word Copied &larr;</b>';
	setTimeout(() => {
        e.trigger.innerHTML = '<b>&#8594; Copy Word &larr;</b>';
     }, 1500);
	
});
if (document.getElementById("btncopy") != null) {
    document.getElementById("btncopy").addEventListener('click', e => {
        document.getElementById("copied").innerHTML = '<p style="text-align:center;"><b>✅ Random Words Copied</b></p>';
        setTimeout(() => {
        document.getElementById("copied").style.display = "none";
        }, 1500);
    })
 }
})