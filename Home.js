// console.log('hellooooooo')//untuk menampilkan teks di consolenya

//tipe data
// 1.string
// 2.integer
// 3.real   #tipe data yg angka yg memiliki koma atau desimal
// 4.boolean #hanya memiliki 2 nilai yaitu true dan false



// operator
// 1.* 
// 2./ 
// 3.+ 
// 4.- 
// 5.% #modulus, pembagian yg ada sisanya itu modulus
// .(koma)



//variabel #tdk boleh diawali dengan angka dan simbol" aneh
// 1.string
var string="hello dunia"
console.log(string)

// 2.integer
// integer=20 + 20
var integer=20 + 20
console.log(integer)




// if else(percabangan)
angka=2

if(angka==2){
	console.log('Heiii hei not badd')
}else{
	console.log('afah iyah')
}



// operator pembanding
// 1.== #sama dengan
// 2.!= #tidak sama dengan
// 3.>
// 4.<
// 5.>=
// 6.<=
// 7.===#mengecek tipe data, harus sama




// operator logika
// 1.&&(and)
// 2.||(or)
and=6
if(and==6 && and<7){//if(true && true)
	console.log('Turuuuu')
}else{
	console.log('Iya decks')
}


or=7
if(or==7 || or<5){
	console.log('or')
}else{
	console.log('not ')
}



// operator bitwise(fungsinya sama cuma ini untuk angka)
// 1.&
// 2.|




// latihan contoh
kelereng=10
if(kelereng>10){
	console.log('Saya berikan ke temen')
	if(kelereng>100){
		console.log('buanyak banget')
	}
}else if(kelereng<5){
	console.log('saya jual')
}else{
	console.log('pakai sendiri')
}




// array #variabel yg memiliki lebih dari 1
kotak_pensil=['pulpen','pensil','penggaris']

console.log(kotak_pensil)
console.log(kotak_pensil[1])//ambil satu-satu





// for loop #
for(var i=0; i<10; i++){//i=o dimulai dari 0 #i<10(ulang 10 kali, i++#sama artinya dgn i+1, i--#sama artinya dengan i-1)
	console.log('ulanggg'+i)
}


for (var i=0; i<kotak_pensil.length; i++){
	console.log(kotak_pensil[i])
}




// function

function tambah(a,b){
	console.log(2+2)
	console.log(a+b)
	// return a*b
}

tambah(10,20);
// ;(akhir dari segalanya, seperti .(titik pada kalimat))











