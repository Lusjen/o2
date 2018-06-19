// tmas=['room','floor','area'];
// var slider=[];
// var $range=[];
// 	for(i=0; i<tmas.length; i++){
// 		$range[i]= $("#"+tmas[i]);
// 	}
//
// //Кнопка reset
// $('#reset').click(function(){
//
// for(i=0; i<tmas.length; i++){
// slider[i] = $range[i].data("ionRangeSlider");
// }
// slider[0].reset();
// slider[1].reset();
// slider[2].reset();
// });
//
// function AddFilter(){
// 	console.log(1111);
// 	var n=[];
// 	for(i=0; i<tmas.length; i++){
// str=document.getElementById(tmas[i]+"_min_max").value;
//
// n[tmas[i]]=str.split('/');
// n[tmas[i]][0]=Number(n[tmas[i]][0]);
// n[tmas[i]][1]=Number(n[tmas[i]][1]);
//
// 			$range[i].ionRangeSlider( {
// 			min: n[tmas[i]][0],
//             max: n[tmas[i]][1],
//             from: n[tmas[i]][0],
//             to: n[tmas[i]][1],
//             type: 'double',
// 		   hide_min_max: true,
// 			 onChange: function(data){
// 				 $('.results_box').addClass('blured');
//
// 	     },
// 			onFinish: function(data){
// 				$('.results_box').removeClass('blured');
//
// 				updateInputs()
// 			},
// 			onUpdate: updateInputs
//
// 			}
// );
// }
//
// 	function updateInputs (data) {
// 	var vals=[];
// 	for(i=0; i<tmas.length; i++){
// 		vals[i]=$("#"+tmas[i]).data("ionRangeSlider");
// }
// 	data = $('.sort');
// 	for(i=0; i<data.length; i++){
//
// 	if(	data[i].dataset.room>=vals[0].old_from  && data[i].dataset.room<=vals[0].old_to &&
// 		data[i].dataset.floor>=vals[1].old_from && data[i].dataset.floor<=vals[1].old_to &&
// 		data[i].dataset.area>=vals[2].old_from && data[i].dataset.area<=vals[2].old_to
//
// 		){
// 	data[i].style.display='table-row';
// 	}else{
// 	data[i].style.display='none';
// 	}}
// 		}
// }
//  AddFilter();

 $("#price").ionRangeSlider({
    type: "double",
    grid: true,
    min: 200000,
    max: 2000000,
    from: 200000,
    to: 2000000,
    hide_min_max: true,
    grid: false
});
$("#square").ionRangeSlider({
	 type: "double",
	 grid: true,
	 min: 44,
	 max: 172,
	 from: 44,
	 to: 172,
	 hide_min_max: true,
	 grid: false
});
$("#priceM").ionRangeSlider({
	 type: "double",
	 grid: true,
	 min: 7000,
	 max: 50000,
	 from: 7000,
	 to: 50000,
	 hide_min_max: true,
	 grid: false
});
$("#squareLiv").ionRangeSlider({
	type: "double",
	grid: true,
	min: 12,
	max: 154,
	from: 12,
	to: 154,
	hide_min_max: true,
	grid: false
});

  // скрипт для выравнивания последней строки флекс-бокса в разделе filter.php /Anna/
var emptyCells, i;

$('.with-empty-cells').each(function() {
emptyCells = [];
for (i = 0; i < $(this).find('.cell').length; i++) {
emptyCells.push($('<li>', {
class: 'cell is-empty'
}));
}
$(this).append(emptyCells);
});
