
//range
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
// end__range

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