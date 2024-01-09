self.onmessage = function(){
    let s = 0;
    for(let i=0;i<10000000000;i++){     // it takes more time than worker 1
        s+= i;
    }
    self.postMessage(s)
}