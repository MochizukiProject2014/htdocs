
describe('core.Array', function() {
    
    it('first', function() {
        // 最初の要素を取得
        var arr = [1, 2, 3, 4, 5, 6];
        assert.equal(arr.first, 1);
    });
    
    it('last', function() {
        var arr = [1, 2, 3, 4, 5, 6];
        assert.equal(arr.last, 6);
    });

    it('equals', function() {
        var arr = [6, 5, 2, 3, 1, 4];
        assert(arr.equals([6, 5, 2, 3, 1, 4]));
    });
    
    it('deepEquals', function() {
        var arr = [6, 5, 2, 3, 1, 4];
        var arr2= [
            [5, 2, 1],
            5,
            [2, 2, 2, 3, 4, 5],
            66,
        ];
        
        assert(arr.deepEquals([6, 5, 2, 3, 1, 4]));
        assert(arr2.deepEquals([
            [5, 2, 1],
            5,
            [2, 2, 2, 3, 4, 5],
            66,
        ]));
    });

    it('contains', function() {
        var arr = [6, 5, 2, 3, 1, 4];
        assert.equal(arr.contains(2), true);
        assert.equal(arr.contains(2, 3), false);
        assert.equal(arr.contains(7), false);
    });
    
    it('at', function()
    {
        var arr = [1, 2, 3, 4, 5, 6];
        assert.equal(arr.at(0), 1);
        assert.equal(arr.at(20), 3);
        assert.equal(arr.at(100), 5);
        assert.equal(arr.at(-1), 6);
        assert.equal(arr.at(-10), 3);
    });
    
    it('swap', function() {
        var arr = [1, 2, 3, 4, 5, 6];
        arr.swap(0, 5);
        assert(arr.equals([6, 2, 3, 4, 5, 1]));
    });
    
    it('erase', function() {
        var arr = [1, 2, 3, 4, 5, 6];
        arr.erase(4);
        assert(arr.equals([1, 2, 3, 5, 6]));
    });
    
    it('eraseAll', function() {
        var arr = [2, 4, 8, 16, 2, 4, 8, 16];
        arr.eraseAll(4);
        assert(arr.equals([2, 8, 16, 2, 8, 16]));
    });
    
    it('eraseIf', function() {
        var arr = [1, 2, 3, 4, 5, 6];
        arr.eraseIf(function(elm) {
        	return (elm%2) == 0;
        });
        assert(arr.equals([1, 3, 4, 5, 6]));
    });
    
    it('eraseIfAll', function() {
        var arr = [1, 2, 3, 4, 5, 6];
        arr.eraseIfAll(function(elm) {
        	return (elm%2) == 0;
        });
        assert(arr.equals([1, 3, 5]));
    });
    
    it('random', function() {
        var arr = [1, 2, 3, 4, 5, 6];
    	for (var i=0; i<128; ++i) {
    		var n = arr.random();
	        assert(1 <= n && n <= 6);
    	}
    });
    
    it('pickup', function() {
        var arr = [1, 2, 3, 4, 5, 6];
    	for (var i=0; i<128; ++i) {
    		var n = arr.random();
	        assert(1 <= n && n <= 6);
    	}
    });
    
    it('range', function() {
        assert([].range(10).equals([0, 1, 2, 3, 4, 5, 6, 7, 8, 9]));
        assert([].range(1, 11).equals([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]));
        assert([].range(0, 30, 5).equals([0, 5, 10, 15, 20, 25]));
        assert([].range(0, 10, 3).equals([0, 3, 6, 9]));
        assert([].range(0, -10).equals([0, -1, -2, -3, -4, -5, -6, -7, -8, -9]));
        assert([].range(0, -10, -2).equals([0, -2, -4, -6, -8]));
        assert([].range().equals([]));
        assert([].range(1, 0).equals([1]));
    });

    it('flatten', function() {
        var arr = [1, 2, 3, [4, 5], [6, [7, 8]]];

        // default
        assert(arr.flatten().deepEquals([1, 2, 3, 4, 5, 6, 7, 8]));
        // level 1
        assert(arr.flatten(1).deepEquals([1, 2, 3, 4, 5, 6, [7, 8]]));
        // level 2
        assert(arr.flatten(2).deepEquals([1, 2, 3, 4, 5, 6, 7, 8]));
    });
    
    it('uniq', function() {
        var arr = [0, 1, 2, 3, 4, 5, 6, 6, 5, 4, 3, 2, 1, 100];
        assert(arr.uniq().equals([0, 1, 2, 3, 4, 5, 6, 100]));
    });
    
});

