/*перевести кол-во лет в дни (плюс добавить дни високосных лет) */

function calcAge(age) {
	let days = age * 365;
    let leapYear  = age  / 13;
    return (days + leapYear);
}