project yang saya kerjakan ini adalah project management account yang dimana project ini berfungsi untuk CREATE, UPDATE, READ, DELETE account.

untuk dapat menjalankan project ini harus di pastikan memiliki php 8, xampp atau laragon dan untuk database memiliki postgresql. lalu buka editor source code dan jalankan php artisan migrate dan php artisan db:seed pada teminal.

ketika masuk kedalam website user perlu memasukan akun mereka. disini saya sudah membuat sebuah akun admin agar dapat bisa melakukan login

email : admin@gmail.com
password : password

ketika akun yang di masukan tidak terdaftar makan system akan menampilkan pesan error

ketika berhasil melakukan login maka system akan mengalihkan ke halama account. di halaman ini user dapat melakukan CREATE dengan menekan create account dan system akan menampilkan pop up form dengan field name, email, dan juga password. perlu di perhatikan ketika membuat password system memiliki requirement  Minimum 8 characters, Upercase and Lowercase, Number, Symbol. jika tidak memenuhi requirement maka system akan menampilkan pesan error

untuk melakukan UPDATE user dapat menekan tombol edit data dan system akan mengalihkan ke form edit data. form ini untuk mengubah data name dan email. 
untuk update jg menyediakan change password yang memiliki requirement yang sama ketika membuat account. jika berhasil akan menampilkan pesan berhasil. jika gagal akan menampilkan pesan error.

jika ingin menghapus data user dapat menekan tombol delete data. ketika tombol delete data diitekan system akan menampilkan peringatan yang berfungsi untuk memastikan apakah user memang ingin menghapus data tersebut atau tidak. ika berhasil akan menampilkan pesan berhasil.
