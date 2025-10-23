<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
.trapezium-card {
    position: relative;
    margin: 30px 0;
    height: 200px;
    background: #f8f9fa;
    clip-path: polygon(15% 0, 100% 0, 85% 100%, 0 100%);
    transition: transform 0.3s ease;
}

/* Card content wrapper to prevent text from being skewed */
.card-content {
    position: relative;
    height: 100%;
    padding: 20px 40px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

/* Optional hover effect */
.trapezium-card:hover {
    transform: translateY(-5px);
}

/* Optional shadow effect */
.trapezium-card::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    clip-path: polygon(15% 0, 100% 0, 85% 100%, 0 100%);
    z-index: -1;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .trapezium-card {
        clip-path: polygon(10% 0, 100% 0, 90% 100%, 0 100%);
        height: 180px;
    }
    
    .card-content {
        padding: 15px 30px;
    }
}

/* Custom colors for different cards */
.trapezium-card.primary {
    background: linear-gradient(135deg, #007bff, #0056b3);
    color: white;
}

.trapezium-card.secondary {
    background: linear-gradient(135deg, #6c757d, #495057);
    color: white;
}

.trapezium-card.success {
    background: linear-gradient(135deg, #28a745, #1e7e34);
    color: white;
}
</style>

<!-- Example Usage with Bootstrap Grid -->
<div class="container">
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-6 col-lg-4">
            <div class="trapezium-card primary">
                <div class="card-content">
                    <h4>Service Title</h4>
                    <p>Description of your service or content goes here. Keep it concise for better readability.</p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-6 col-lg-4">
            <div class="trapezium-card secondary">
                <div class="card-content">
                    <h4>Service Title</h4>
                    <p>Description of your service or content goes here. Keep it concise for better readability.</p>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-6 col-lg-4">
            <div class="trapezium-card success">
                <div class="card-content">
                    <h4>Service Title</h4>
                    <p>Description of your service or content goes here. Keep it concise for better readability.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>