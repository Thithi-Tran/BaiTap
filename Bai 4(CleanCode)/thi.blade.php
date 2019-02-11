<!DOCTYPE html>
<html>
<head>
    <title>Docker</title>
    <style>
        .list-item{
            list-style: none;
            padding: 10px 20px;
        }
        .list-item li{
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
        }
        .container{
            margin: 0px auto;
            width: 1160px;
        }
        .container ol li{
            font-size: 16px;
            font-family: Arial, Helvetica, sans-serif;
        }
        li{
            padding: 10px 0px;
            text-align: justify;
        }

    </style>
</head>
<body>
<h1>
    <center>
        <b>Docker</b>
    </center>
</h1>
<div class="container">
    <ol>
        <li>
            Docker là gì ? Container là gì ? Docker image là gì? Dùng docker có gì tốt? Dùng docker khác vagrant ở đâu?
            <ul class="list-item">
                <li>
                    <b> - Docker</b> là nền tảng phần mềm cho phép bạn dựng, kiểm thử và triển khai ứng dụng một
                    cách nhanh chóng. Docker đóng gói phần mềm vào các đơn vị tiêu chuẩn hóa được gọi
                    là bộ chứa có mọi thứ phần mềm cần để chạy,trong đó có thư viện, công cụ hệ thống, mã và thời gian chạy.
                </li>
                <li>
                    <b> - Container</b> Thể hiện thời gian chạy của một image- những gì image trở thành trong bộ nhớ khi được thực thi.
                </li>
                <li>
                    <b> - Docker image</b> <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Một container được khởi chạy bằng cách chạy một image. Một image là một gói phần mềm thực thi bao gồm tất cả mọi thứ cần thiết để chạy một ứng dụng – mã, một thời gian chạy, các thư viện, các biến môi trường, và các tập tin cấu hình<br>
                    Có thể hiểu docker image như khung xương giúp định hình cho container, nó sẽ tạo ra container khi thực hiện các lệnh chạy image đó. Nếu nó với phong cách lập trình hướng đối tượng, docker image là class, còn container là thực thể(instance, thể hiện) của class đó.
                </li>
                <li>
                    <b> - Dockerfile:</b>định nghĩa những gì diễn ra trong môi trường bên trong container của bạn.
                </li>
                <li>
                    <b> - Docker có gì tốt</b>
                    <ul>
                        <li>
                            Với docker, chúng ta có thể đóng giói mọi ứng dụng ví dụ như webapp, backend, MySQL, BigData... thành các containers và có thể chạy ở hầu hết các môi trường ví dụ như Linux, Mac, Window...

                        </li>
                        <li>
                            Docker Containers có một API cho phép quản trị các container từ bên ngoài. Giúp cho chúng ta có thể dễ dàng quản lý, thay đổi, chỉnh sửa các container.

                        </li>
                        <li>
                            Hầu hết các ứng dụng Linux có thể chạy với Docker containers.
                        </li>
                        <li>
                            Docker Containers có tốc độ chạy nhanh hơn hẳn các Vms truyền thống
                        </li>

                    </ul>

                </li>
                <li>
                    <b> - Docker khác Vagrant ở :</b>
                    <ul>
                        <li>
                            Vagrant sử dụng kiến trúc đơn giản hơn nhiều so với Docker. Nó sử dụng các máy ảo để chạy các môi trường độc lập với máy chủ. Điều này được thực hiện bằng cách sử dụng phần mềm được gọi là phần mềm ảo hóa như Vitualbox hoặc Vmware. Mỗi môi trường có một máy ảo riêng và được cấu hình bằng cách sử dụng vagrantfile. Vagrantfile nói cho Vagrant cách thiết lập máy ảo và những kịch bản nào cần được chạy để cung cấp môi trường.<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;Nhược điểm của phương pháp này là mỗi máy ảo không chỉ bao gồm ứng dụng của bạn và tất cả các thư viện của nó mà toàn bộ hệ điều hành khách, có thể có kích thước hàng chục GB.<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;Tuy nhiên, docker sử dụng các thùng chứa các ứng dụng khác, bao gồm ứng dụng các bạn và tất cả phụ thuộc của nó, nhưng chia se kernel(hệ điều hành) với các container khác. Các container chạy như các tiến trình độc lập trên hệ điều hành máy chủ nhưng không bị ràng buộc với bất kỳ cơ sở hạ tầng cụ thể nào.
                        </li>
                        <li>
                            Vagrant dẽ hiểu hơn và dễ dàng hơn để chạy và chạy nhưng có thể rất tốn tài nguyên (RAM và không gian)
                        </li>
                        <li>
                            Kiến trúc của docker khó hiểu hơn và có thể khó đoán hơn để chạy và chạy nhưng nhanh hơn nhiều, sử dụng ít CPU và RAM hơn và có khả năng sử dụng ít không gian hơn so với Vagrant VM.
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            Docker compose là gì? dùng docker compose có gì tốt?
            <ul>
                <li>
                    <b>- Docker Compose </b>là công cụ giúp định nghĩa và khởi chạy multi-container Docker applications. Với compose thì sẽ khai báo nhiều container trong cùng một file và chỉ việc chạy một dòng lệnh là nó sẽ làm mọi việc start container cho chúng ta.
                </li>
                <li>
                    <b>
                        - Dùng docker compose có gì tốt:
                    </b>
                    <ul>
                        <li>
                            Nhiều môi trường bị cô lập trên một máy chủ
                        </li>
                        <li>
                            Bảo toàn dữ liệu khối lượng khi container được tạo
                        </li>
                        <li>
                            Chỉ tạo lại các container đã thay đổi
                        </li>
                        <li>
                            Biến và di chuyển một thành phần giữa các môi trường
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            Mô tả khái quát cú pháp 1 file cấu hình docker compose(package name, version, port, argument, link...)
            <ul>
                <li>
                    -Ví dụ:
                    <div>
                        # docker-compose.yml<br>
                        <div>
                            &nbsp;&nbsp;version: "2"<br>

                            &nbsp;&nbsp;&nbsp;&nbsp;services:<br>
                            <div style="padding-left: 35px">
                                selfproject:<br>
                                <div style="padding-left: 50px">
                                    image: tutum/apache-php<br>
                                    links:<br>
                                    &nbsp;&nbsp;- mysql<br>
                                    ports:<br>
                                    &nbsp;&nbsp;- "8888:80"<br>
                                    networks:<br>
                                    &nbsp;&nbsp;- back-tier<br>
                                    volumes:<br>
                                    &nbsp;&nbsp;- .:/var/www/html/selproject<br>
                                    environment:<br>
                                    &nbsp;&nbsp;- ALLOW_OVERRIDE=true<br>
                                    hostname: selfproject<br>
                                    cpu_shares: 512             # 0.5 CPU<br>
                                    mem_limit: 536870912        # 512 MB RAM<br>
                                </div>
                            </div>
                            <div style="padding-left: 35px">
                                mysql:<br>
                                <div style="padding-left: 50px">
                                    image: mysql<br>
                                    ports:<br>
                                    &nbsp;&nbsp;- "3307:3306"<br>
                                    networks:<br>
                                    &nbsp;&nbsp;- back-tier<br>
                                    volumes:<br>
                                    &nbsp;&nbsp;- ./mysql-data/:/var/lib/mysql/<br>
                                    environment:<br>
                                    &nbsp;&nbsp;- MYSQL_ROOT_PASSWORD=root<br>
                                    &nbsp;&nbsp;- MYSQL_DATABASE=selfproject<br>
                                    hostname: mysql<br>
                                    cpu_shares: 512             # 0.5 CPU<br>
                                    mem_limit: 536870912        # 512 MB RAM<br>
                                </div>
                            </div>

                            networks:<br>
                            &nbsp;&nbsp;back-tier:<br>

                        </div>


                    </div>
                </li>
                <li>
                    - Giải thích  nội dung file compose:
                    <ul>
                        <li>
                            Version : phiên bản số 2

                        </li>
                        <li>
                            Với service mysql
                            <ul style="list-style:none">
                                <li> - image sử dụng  là mysql</li>
                                <li>
                                    - ports ở đây 3306 là port được sử dụng bên trong container, 3307 được export ra bên ngoài để mình có thể xem và thao tác với dữ liệu.
                                </li>
                                <li>
                                    - networks sử dụng là back-tier
                                </li>
                                <li>
                                    - volumes ở đây chính là mount folder bên ngoài với bên trong container như phần sử dụng command<span style="color:#000;font-style: italic">. './mysql-data'</span> là folder mình muốn lưu trưc dữ liệu ở bên ngoài, chúng ta có thể lấy link bất kỳ đâu mà bạn muốn.
                                </li>
                                <li>
                                    -	hostname: mysql
                                </li>
                            </ul>
                        </li>
                        <li>
                            Với web service :
                            <ul style="list-style:none">
                                <li>
                                    - image sử dụng là tutum/apache-php.
                                </li>
                                <li>
                                    - links tới mysql container
                                </li>
                                <li>
                                    - networks cũng phải sử dụng back-tier cùng với mysql cho toàn bộ service trong compose file để các container có thể giao tiếp với nhau
                                </li>
                                <li>
                                    - volumes: Do docker-compose.yml file này của mình đặt ngày trong folder selfproject của mình nên đường dẫn đến project bên ngoài máy chủ là "." thư mục hiện tại và mount vào <span style="color:#000;font-style: italic">"/var/www/html/selproject"</span> trong container
                                </li>
                                <li>
                                    - Như vấn đề với override mà mình đã nói bên trên và đoạn config này giải quyết vấn đề đó.
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ol>
</div>
</body>
</html>