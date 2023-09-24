const accountId = 14453
let accountEmail = "tufelrad@gmail.com"
var accountPassword = "12345"
accountCity = "Ahemdabad"
let accountState;


// console.log(accountId); to print data

/*
Prefer not to use var
because of issue in block scope and functional scope
*/

accountEmail = "tufelrad786@gmail.com"
accountPassword = "67890"
accountCity = "Jamnagar"
/*
accountId = "12367" 
cannot do this because once constant is declared it cannot be modified
*/

console.table([accountId, accountEmail, accountPassword, accountCity, accountState])