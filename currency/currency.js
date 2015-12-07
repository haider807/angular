angular.module("finance",[]).factory('currencyConverter',function(){
    var currencies = ['PAKRs','USDollor','Euro','CNY','GBPound','SaudiRial','UAEDirham'];
    var usdToForeignRates   = {
        USDollor: 1,
        PAKRs: 109,
        Euro: 0.74,
        CNY: 6.09,
        GBPound: 0.66,
        SaudiRial: 3.75,
        UAEDirham:3.66
    };
    var convert = function(amount,inCur,outCur)
    {
       return amount * usdToForeignRates[outCur] / usdToForeignRates[inCur];
    };
    return {
        currencies : currencies,
        convert : convert
    };
});

angular.module("currency",['finance']).controller('fstCont',['currencyConverter',function(currencyConverter){
        this.qty = 1;
        this.cst = 1;
        this.inCur = 'Euro';
        this.currencies = currencyConverter.currencies;
        this.total = function total(outCur)
        {
            return currencyConverter.convert(this.qty * this.cst,this.inCur,outCur);
        };
}]);