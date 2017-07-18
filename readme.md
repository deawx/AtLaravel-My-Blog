การนำไปใช้งาน 
1.ดาวน์โหลดแล้วแตก zip ไฟล์ ออก
2.นำไปวางที่ . server เรา 
3.config database ทีไฟล์ .env
4.สร้างฐานข้อมูลตามที่ config ใน .env
5.สั่ง migrate database 
     php artisan migrate 
     
6.สร้าง key ใหม่ 
     php artisan key:generate
     
7.RUN 
    php artisan serve
