การนำไปใช้งาน 
1.ดาวน์โหลดแล้วแตก zip ไฟล์ ออก <br/>
2.นำไปวางที่ . server เรา  <br/>
3.config database ทีไฟล์ .env <br/>
4.สร้างฐานข้อมูลตามที่ config ใน .env <br/>
5.สั่ง migrate database  </br>
     php artisan migrate <br/>
     
6.สร้าง key ใหม่ 
     php artisan key:generate
     
7.RUN 
    php artisan serve
