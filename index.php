<?php
// UAC - Unified Automation VNDNER CNC Management System
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        UAC Vietnam-Unified Automation VNDNER CNC Management System
    </title>
    <meta property="og:title" content="UAC - Unified Automation VNDNER CNC Management System">
<meta property="og:description" content="Hệ thống quản lý CNC tự động hợp nhất cho doanh nghiệp cơ khí.">

<meta property="og:url" content="https://uac-vietnam.com">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">



    <style>

        body{
            margin:0;
            padding:0;
            font-family:Arial, sans-serif;
            background:#f5f7fb;
            color:#222;
        }

        /* HERO */

        .hero{
            background:linear-gradient(135deg,#0f172a,#1e3a8a);
            color:white;
            padding:90px 20px;
        }

        .hero h1{
            font-size:52px;
            font-weight:700;
            line-height:1.3;
            margin-bottom:30px;
        }

        .hero p{
            font-size:20px;
            line-height:1.9;
            color:#e2e8f0;
        }

        .highlight{
            color:#60a5fa;
            font-weight:bold;
        }

        /* BUTTON */

        .btn-main{
            background:#ff9800;
            border:none;
            color:white;
            padding:14px 28px;
            border-radius:10px;
            font-weight:bold;
            transition:0.3s;
        }

        .btn-main:hover{
            background:#e68900;
            transform:translateY(-3px);
        }

        /* SECTION */

        .section-title{
            font-size:40px;
            font-weight:700;
            margin-bottom:25px;
            color:#0f172a;
        }

        section{
            padding:80px 0;
        }

        /* DIAGRAM */

        .system-diagram{
            background:white;
            border-radius:20px;
            padding:35px;
            box-shadow:0 5px 25px rgba(0,0,0,0.1);
        }

        .diagram-center{
            text-align:center;
            margin-bottom:30px;
        }

        .diagram-center a{
            display:inline-block;
            background:#1e3a8a;
            color:white;
            text-decoration:none;
            padding:18px 35px;
            border-radius:14px;
            font-size:24px;
            font-weight:bold;
            transition:0.3s;
        }

        .diagram-center a:hover{
            background:#2563eb;
            transform:translateY(-3px);
        }

        .diagram-grid{
            display:grid;
            grid-template-columns:repeat(2,1fr);
            gap:20px;
        }

        .diagram-box{
            display:block;
            text-decoration:none;
            background:#f8fafc;
            border:2px solid #dbeafe;
            border-radius:16px;
            padding:25px;
            text-align:center;
            transition:0.3s;
            color:#0f172a;
        }

        .diagram-box:hover{
            transform:translateY(-5px);
            background:#eff6ff;
            border-color:#3b82f6;
        }

        .diagram-box h5{
            font-size:20px;
            font-weight:bold;
            margin-bottom:10px;
            color:#1d4ed8;
        }

        .diagram-box p{
            margin:0;
            color:#475569;
        }

        .register-box{
            background:#dcfce7;
            border-color:#22c55e;
        }

        .register-box:hover{
            background:#bbf7d0;
        }

        /* FEATURE */

        .feature-card{
            background:white;
            border-radius:18px;
            padding:30px;
            height:100%;
            box-shadow:0 5px 20px rgba(0,0,0,0.08);
            transition:0.3s;
        }

        .feature-card:hover{
            transform:translateY(-5px);
        }

        .feature-card h4{
            color:#1e3a8a;
            margin-bottom:15px;
            font-weight:bold;
        }

        .feature-card p{
            line-height:1.8;
        }

        /* WORKFLOW */

        .workflow-section{
            background:#0f172a;
            color:white;
        }

        .workflow-box{
            background:#1e293b;
            border-radius:14px;
            padding:25px;
            text-align:center;
            height:100%;
        }

        .workflow-box h5{
            color:#60a5fa;
            margin-bottom:15px;
            font-weight:bold;
        }

        /* CTA */

        .cta-box{
            background:white;
            border-radius:20px;
            padding:60px 30px;
            box-shadow:0 5px 25px rgba(0,0,0,0.08);
            text-align:center;
        }

        footer{
            background:#020617;
            color:#cbd5e1;
            padding:40px 0;
            text-align:center;
        }

        /* MOBILE */

        @media(max-width:768px){

            .hero h1{
                font-size:36px;
            }

            .hero p{
                font-size:18px;
            }

            .diagram-grid{
                grid-template-columns:1fr;
            }

            .section-title{
                font-size:30px;
            }

        }

    </style>
    
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "UAC Vietnam",
  "url": "https://uac-vietnam.com",
  "logo": "https://uac-vietnam.com/logo.png",
  "description": "Unified Automation VNDNER CNC Management System"
}
</script>

</head>
<body>

<!-- HERO -->
<section class="hero">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- LEFT -->
            <div class="col-lg-6">

               <h1>
UAC Vietnam - Unified Automation VNDNER CNC Management System
</h1>

                <p>
                   Hệ thống quản lý CNC tự động - hợp nhất giúp doanh nghiệp cơ khí 
                    quản lý <span class="highlight">đồng bộ - chính xác - xuyên suốt</span> 
                    từ khâu báo giá, quản lý PO, lập trình CNC, triển khai sản xuất, 
                    kiểm soát chất lượng đến giao hàng.
                </p>

                <!-- BUTTONS -->
                <div class="mt-5 d-flex flex-wrap gap-3">

                    <a href="https://lgiovn.com/vndner_2.php"
                       class="btn btn-main">
                        Hướng dẫn tổng quan
                    </a>

                    <a href="https://lgiovn.com/huong_dan_dang_ky.php"
                       class="btn btn-outline-light btn-lg">
                        Hướng dẫn đăng ký
                    </a>

                    <a href="https://lgiovn.com/VNDER_CNC-main/register_business.php"
                       class="btn btn-success btn-lg fw-bold">
                        Đăng ký chính thức
                    </a>

                </div>

            </div>

            <!-- RIGHT -->
            <div class="col-lg-6">

                <div class="system-diagram">

                    <div class="diagram-center">

                        <a href="https://lgiovn.com/vndner_2.php">
                            UAC - VNDNER CNC
                        </a>

                    </div>

                    <div class="diagram-grid">

                        <a href="https://lgiovn.com/vndner_2.php"
                           class="diagram-box">

                            <h5>BÁO GIÁ</h5>
                            <p>Quotation Management</p>

                        </a>

                        <a href="https://lgiovn.com/vndner_2.php"
                           class="diagram-box">

                            <h5>PO</h5>
                            <p>Purchase Order</p>

                        </a>

                        <a href="https://lgiovn.com/vndner_2.php"
                           class="diagram-box">

                            <h5>DRAWING</h5>
                            <p>Quản lý bản vẽ</p>

                        </a>

                        <a href="https://lgiovn.com/vndner_2.php"
                           class="diagram-box">

                            <h5>PROGRAMMING</h5>
                            <p>Lập trình CNC</p>

                        </a>

                        <a href="https://lgiovn.com/vndner_2.php"
                           class="diagram-box">

                            <h5>PRODUCTION</h5>
                            <p>Triển khai sản xuất</p>

                        </a>

                        <a href="https://lgiovn.com/vndner_2.php"
                           class="diagram-box">

                            <h5>QC</h5>
                            <p>Kiểm soát chất lượng</p>

                        </a>

                        <a href="https://lgiovn.com/vndner_2.php"
                           class="diagram-box">

                            <h5>DELIVERY</h5>
                            <p>Giao hàng</p>

                        </a>

                        <a href="https://lgiovn.com/huong_dan_dang_ky.php"
                           class="diagram-box register-box">

                            <h5>REGISTER</h5>
                            <p>Đăng ký hệ thống</p>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- INTRO -->
<section>

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="section-title">
                Chuyển đổi số cho xưởng CNC
            </h2>

            <p class="fs-5">
                Nền tảng quản lý sản xuất CNC hiện đại dành cho doanh nghiệp cơ khí Việt Nam.
            </p>

        </div>

        <div class="row g-4">

            <div class="col-md-6 col-lg-4">

                <div class="feature-card">

                    <h4>Quản lý báo giá</h4>

                    <p>
                        Tính giá thành, tạo báo giá chuyên nghiệp,
                        xuất PDF / Excel nhanh chóng và chính xác.
                    </p>

                </div>

            </div>

            <div class="col-md-6 col-lg-4">

                <div class="feature-card">

                    <h4>Quản lý PO & Drawing</h4>

                    <p>
                        Đồng bộ dữ liệu khách hàng, PO và bản vẽ kỹ thuật
                        trong cùng một hệ thống.
                    </p>

                </div>

            </div>

            <div class="col-md-6 col-lg-4">

                <div class="feature-card">

                    <h4>Quản lý lập trình CNC</h4>

                    <p>
                        Giao việc cho programmer,
                        theo dõi trạng thái lập trình và sản xuất.
                    </p>

                </div>

            </div>

            <div class="col-md-6 col-lg-4">

                <div class="feature-card">

                    <h4>Quản lý Operator</h4>

                    <p>
                        Theo dõi tiến độ vận hành máy CNC,
                        năng suất và trạng thái công việc.
                    </p>

                </div>

            </div>

            <div class="col-md-6 col-lg-4">

                <div class="feature-card">

                    <h4>Kiểm soát chất lượng</h4>

                    <p>
                        Quản lý dữ liệu QC,
                        hạn chế sai sót và tăng độ ổn định sản xuất.
                    </p>

                </div>

            </div>

            <div class="col-md-6 col-lg-4">

                <div class="feature-card">

                    <h4>Dữ liệu hợp nhất</h4>

                    <p>
                        Toàn bộ quy trình sản xuất được liên kết đồng bộ,
                        dễ truy xuất và quản lý.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- WORKFLOW -->
<section class="workflow-section">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="section-title text-white">
                Workflow quản lý CNC hợp nhất
            </h2>

        </div>

        <div class="row g-4">

            <div class="col-md-2">

                <div class="workflow-box">

                    <h5>1. Báo giá</h5>
                    <p>Tạo quotation</p>

                </div>

            </div>

            <div class="col-md-2">

                <div class="workflow-box">

                    <h5>2. PO</h5>
                    <p>Tiếp nhận đơn hàng</p>

                </div>

            </div>

            <div class="col-md-2">

                <div class="workflow-box">

                    <h5>3. Drawing</h5>
                    <p>Quản lý bản vẽ</p>

                </div>

            </div>

            <div class="col-md-2">

                <div class="workflow-box">

                    <h5>4. CNC</h5>
                    <p>Triển khai sản xuất</p>

                </div>

            </div>

            <div class="col-md-2">

                <div class="workflow-box">

                    <h5>5. QC</h5>
                    <p>Kiểm tra chất lượng</p>

                </div>

            </div>

            <div class="col-md-2">

                <div class="workflow-box">

                    <h5>6. Delivery</h5>
                    <p>Giao hàng</p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- CTA -->
<section>

    <div class="container">

        <div class="cta-box">

            <h2 class="section-title">
                Bắt đầu triển khai hệ thống CNC Management
            </h2>

            <p class="fs-5 mb-5">
                Tối ưu quản lý vận hành xưởng CNC bằng nền tảng hợp nhất và tự động hóa.
            </p>

            <div class="d-flex flex-wrap justify-content-center gap-3">

                <a href="https://lgiovn.com/VNDER_CNC-main/register_business.php"
                   class="btn btn-success btn-lg fw-bold">
                    Đăng ký hệ thống
                </a>

                <a href="https://lgiovn.com/vndner_2.php"
                   class="btn btn-primary btn-lg">
                    Xem tài liệu hướng dẫn
                </a>

            </div>

        </div>

    </div>

</section>

<!-- FOOTER -->
<footer>

    <div class="container">

        <h4>
            UAC Vietnam- Unified Automation VNDNER CNC Management System
        </h4>

        <p class="mt-3 mb-0">
            Hệ thống quản lý CNC tự động - hợp nhất dành cho doanh nghiệp cơ khí hiện đại.
        </p>

    </div>

</footer>

</body>
</html>