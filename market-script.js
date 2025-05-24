// Market Page JavaScript

// Market countdown timer
function updateMarketCountdown() {
    const now = new Date();
    const marketOpen = new Date();
    marketOpen.setHours(9, 30, 0, 0); // 9:30 AM
    
    if (now > marketOpen) {
        marketOpen.setDate(marketOpen.getDate() + 1);
    }
    
    const timeDiff = marketOpen - now;
    const hours = Math.floor(timeDiff / (1000 * 60 * 60));
    const minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((timeDiff % (1000 * 60)) / 1000);
    
    const countdownElement = document.getElementById('countdown');
    if (countdownElement) {
        countdownElement.textContent = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
    }
}

// Chart functionality
let marketChart;

function initChart() {
    const ctx = document.getElementById('marketChart');
    if (!ctx) return;
    
    const chartData = {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [{
            label: 'S&P 500',
            data: [4200, 4150, 4300, 4250, 4400, 4350, 4500, 4450, 4600, 4550, 4650, 4567],
            borderColor: '#2563eb',
            backgroundColor: 'rgba(37, 99, 235, 0.1)',
            fill: true,
            tension: 0.4
        }]
    };
    
    marketChart = new Chart(ctx, {
        type: 'line',
        data: chartData,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: false,
                    grid: {
                        color: '#f3f4f6'
                    }
                },
                x: {
                    grid: {
                        color: '#f3f4f6'
                    }
                }
            }
        }
    });
}

// Chart tab switching
function initChartTabs() {
    const tabBtns = document.querySelectorAll('.tab-btn');
    const chartData = {
        sp500: {
            label: 'S&P 500',
            data: [4200, 4150, 4300, 4250, 4400, 4350, 4500, 4450, 4600, 4550, 4650, 4567],
            color: '#2563eb'
        },
        nasdaq: {
            label: 'NASDAQ',
            data: [14000, 13800, 14200, 14100, 14500, 14300, 14700, 14600, 14900, 14800, 15000, 14789],
            color: '#10b981'
        },
        dow: {
            label: 'Dow Jones',
            data: [34000, 33800, 34500, 34200, 35000, 34800, 35500, 35200, 35800, 35500, 36000, 35234],
            color: '#f59e0b'
        },
        crypto: {
            label: 'Bitcoin',
            data: [45000, 42000, 48000, 46000, 52000, 50000, 55000, 53000, 58000, 56000, 60000, 58500],
            color: '#ef4444'
        }
    };
    
    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Remove active class from all tabs
            tabBtns.forEach(tab => tab.classList.remove('active'));
            // Add active class to clicked tab
            btn.classList.add('active');
            
            // Update chart
            const chartType = btn.dataset.chart;
            const data = chartData[chartType];
            
            if (marketChart && data) {
                marketChart.data.datasets[0].label = data.label;
                marketChart.data.datasets[0].data = data.data;
                marketChart.data.datasets[0].borderColor = data.color;
                marketChart.data.datasets[0].backgroundColor = data.color + '20';
                marketChart.update();
            }
        });
    });
}

// Time range switching
function initTimeRange() {
    const rangeBtns = document.querySelectorAll('.range-btn');
    
    rangeBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Remove active class from all range buttons
            rangeBtns.forEach(range => range.classList.remove('active'));
            // Add active class to clicked button
            btn.classList.add('active');
            
            // Update chart data based on range
            const range = btn.dataset.range;
            updateChartRange(range);
        });
    });
}

function updateChartRange(range) {
    if (!marketChart) return;
    
    const rangeData = {
        '1D': {
            labels: ['9:30', '10:00', '10:30', '11:00', '11:30', '12:00', '12:30', '1:00', '1:30', '2:00', '2:30', '3:00', '3:30', '4:00'],
            data: [4560, 4565, 4570, 4568, 4572, 4575, 4573, 4578, 4580, 4576, 4582, 4585, 4583, 4567]
        },
        '1W': {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
            data: [4520, 4540, 4555, 4570, 4567]
        },
        '1M': {
            labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
            data: [4450, 4500, 4550, 4567]
        },
        '3M': {
            labels: ['Month 1', 'Month 2', 'Month 3'],
            data: [4300, 4450, 4567]
        },
        '1Y': {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            data: [4200, 4150, 4300, 4250, 4400, 4350, 4500, 4450, 4600, 4550, 4650, 4567]
        }
    };
    
    const data = rangeData[range];
    if (data) {
        marketChart.data.labels = data.labels;
        marketChart.data.datasets[0].data = data.data;
        marketChart.update();
    }
}

// FAQ functionality
function initFAQ() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');
        const icon = question.querySelector('i');
        
        question.addEventListener('click', () => {
            const isOpen = answer.style.display === 'block';
            
            // Close all FAQ items
            faqItems.forEach(faq => {
                faq.querySelector('.faq-answer').style.display = 'none';
                faq.querySelector('.faq-question i').style.transform = 'rotate(0deg)';
            });
            
            // Open clicked item if it was closed
            if (!isOpen) {
                answer.style.display = 'block';
                icon.style.transform = 'rotate(180deg)';
            }
        });
    });
}

// Real-time data simulation
function simulateRealTimeData() {
    const summaryCards = document.querySelectorAll('.summary-card');
    
    summaryCards.forEach(card => {
        const valueElement = card.querySelector('.summary-value');
        const changeElement = card.querySelector('.summary-change');
        
        if (valueElement && changeElement) {
            setInterval(() => {
                // Simulate small price changes
                const currentValue = parseFloat(valueElement.textContent.replace(/[,$]/g, ''));
                const change = (Math.random() - 0.5) * 10; // Random change between -5 and +5
                const newValue = currentValue + change;
                
                // Update value
                if (valueElement.textContent.includes('$')) {
                    valueElement.textContent = `$${newValue.toFixed(2)}`;
                } else {
                    valueElement.textContent = newValue.toFixed(2);
                }
                
                // Update change indicator
                const changePercent = ((change / currentValue) * 100).toFixed(2);
                const isPositive = change > 0;
                
                changeElement.className = `summary-change ${isPositive ? 'positive' : 'negative'}`;
                changeElement.innerHTML = `
                    <i class="fas fa-arrow-${isPositive ? 'up' : 'down'}"></i>
                    ${isPositive ? '+' : ''}${changePercent}% (${isPositive ? '+' : ''}${change.toFixed(2)})
                `;
            }, 5000); // Update every 5 seconds
        }
    });
}

// Initialize everything when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    // Update countdown every second
    updateMarketCountdown();
    setInterval(updateMarketCountdown, 1000);
    
    // Initialize chart
    initChart();
    initChartTabs();
    initTimeRange();
    
    // Initialize FAQ
    initFAQ();
    
    // Start real-time data simulation
    setTimeout(simulateRealTimeData, 2000); // Start after 2 seconds
    
    // Animate elements on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Observe elements for animation
    document.querySelectorAll('.summary-card, .analysis-item, .news-card, .tool-card').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
}); 