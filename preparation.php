<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=10,chrome=1">
    <title>준비중 페이지</title>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700&family=Nanum+Pen+Script&display=swap" rel="stylesheet">
    <style>
        .coming-soon-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #ffffff;
            z-index: 99999;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            overflow: hidden;
        }

        .overlay-container {
            text-align: center;
            color: #333;
            max-width: 800px;
            width: 100%;
            animation: fadeIn 1s ease-in;
            position: relative;
            z-index: 2;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .overlay-logo {
            font-size: 3rem;
            margin-bottom: 2rem;
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }

        .overlay-title {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            font-weight: 700;
            color: #222;
        }

        .overlay-subtitle {
            font-size: 1.2rem;
            margin-bottom: 3rem;
            color: #666;
            line-height: 1.6;
        }

        .overlay-progress-bar {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            height: 8px;
            background: #f0f0f0;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 3rem;
        }

        .overlay-progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
            border-radius: 10px;
            animation: progress 2s ease-out forwards;
        }

        @keyframes progress {
            from {
                width: 0%;
            }
            to {
                width: 75%;
            }
        }

        .overlay-info-box {
            background: #f8f9fa;
            border-radius: 20px;
            padding: 2rem;
            margin-top: 2rem;
            border: 1px solid #e0e0e0;
        }

        .overlay-contact-info {
            font-size: 1rem;
            margin-top: 1rem;
            color: #666;
        }

        .overlay-contact-info a {
            color: #667eea;
            text-decoration: none;
            border-bottom: 1px solid #667eea;
            transition: all 0.3s;
        }

        .overlay-contact-info a:hover {
            color: #764ba2;
            border-bottom-color: #764ba2;
        }

        .overlay-circles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        .overlay-circle {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.05) 0%, rgba(118, 75, 162, 0.05) 100%);
            animation: float 20s infinite;
        }

        .overlay-circle:nth-child(1) {
            width: 300px;
            height: 300px;
            top: -100px;
            left: -100px;
            animation-delay: 0s;
        }

        .overlay-circle:nth-child(2) {
            width: 400px;
            height: 400px;
            bottom: -150px;
            right: -150px;
            animation-delay: 2s;
        }

        .overlay-circle:nth-child(3) {
            width: 200px;
            height: 200px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0) scale(1);
            }
            50% {
                transform: translateY(-20px) scale(1.1);
            }
        }

        @media (max-width: 768px) {
            .overlay-logo {
                font-size: 2rem;
                margin-bottom: 1.5rem;
            }

            .overlay-title {
                font-size: 1.8rem;
            }

            .overlay-subtitle {
                font-size: 1rem;
                margin-bottom: 2rem;
            }

            .overlay-info-box {
                padding: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .overlay-logo {
                font-size: 1.5rem;
            }

            .overlay-title {
                font-size: 1.5rem;
            }

            .overlay-subtitle {
                font-size: 0.9rem;
            }

            .overlay-info-box {
                padding: 1rem;
            }

            .overlay-contact-info {
                font-size: 0.9rem;
            }
        }
    </style>

</head>
<body>
    <div class="coming-soon-overlay">
    <div class="overlay-circles">
        <div class="overlay-circle"></div>
        <div class="overlay-circle"></div>
        <div class="overlay-circle"></div>
    </div>

    <div class="overlay-container">
        <h1 class="overlay-title">홈페이지 리뉴얼 준비중입니다</h1>
        <p class="overlay-subtitle">
            더 나은 서비스로 찾아뵙기 위해 준비하고 있습니다.<br>
            곧 새로운 모습으로 만나뵙겠습니다.
        </p>

        <div class="overlay-progress-bar">
            <div class="overlay-progress-fill"></div>
        </div>

        <div class="overlay-info-box">
            <p style="font-size: 1.1rem; font-weight: 600; margin-bottom: 0.5rem; color: #333;">Coming Soon</p>
            <p style="color: #666;">예상 오픈: 2025년 1월</p>
            <!-- <div class="overlay-contact-info">
                문의: <a href="mailto:contact@example.com">contact@example.com</a>
            </div> -->
        </div>
    </div>
</div>
</body>
</html>