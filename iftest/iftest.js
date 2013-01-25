var t1 = 1;
var t2 = true;
console.log("Start\n====\n");
for(var x = 0 ;x<10;x++){
	var t3=0;
	var time=(new Date()).getTime();
	for(var i = 0 ;i < 100000000;i++){
	    if(t2){
			t3++;
		}
	}
	time = (new Date()).getTime() - time;
	console.log("\tUse "+time+" ms");
}
console.log("stop");

