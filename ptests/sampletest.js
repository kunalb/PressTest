jQuery(document).ready(function(){
	test( "A basic test example", function(){
		ok( true, "Passed test" );
	});

	module("Module A");

	test("first test within module", function() {
	  ok( true, "all pass" );
	});

	test("second test within module", function() {
	  ok( true, "all pass" );
	});

	module("Module B");

	test("some other test", function() {
	  expect(2);
	  equal( true, false, "failing test" );
	  equal( true, true, "passing test" );
	});

});
