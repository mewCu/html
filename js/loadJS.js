function loadJS(src, onSuccess){
    var jsElement = document.createElement('script');
    jsElement.src = src;
    onSuccess = onSuccess || function(){};
    jsElement.onload = jsElement.onreadystatechange = function(){
        if (!this.readyState || 'loaded' === this.readyState || 'complete' === this.readyState){
            onSuccess();
            this.onload = this.onreadystatechange = null;
            this.parentNode.removeChild(this);
        }
    }
    document.getElementsByTagName('head')[0].appendChild(jsElement);
}