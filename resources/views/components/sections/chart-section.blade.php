<div class="chart-card glass-card">
    <!-- Header -->
    <div class="chart-header">
        <h2 class="chart-title">Revenue</h2>
        
        <!-- Center Toggle -->
        <div class="chart-toggle">
            <button class="toggle-btn active" data-type="mrr">MRR</button>
            <button class="toggle-btn" data-type="arpu">ARPU</button>
        </div>
        
        <!-- Right Date Picker -->
        <div class="chart-date">
            <span class="date-display">Jan 2, 2024</span>
            <span class="date-separator"></span>
            <span class="date-separator"></span>

            <span class="date-separator"></span>

            <button class="date-dropdown">
                Last 30 Days
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M3 4.5L6 7.5L9 4.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Metrics Grid -->
    <div class="metrics-grid-chart">
        <div class="metric-item">
            <span class="metric-label">Total MRR</span>
            <span class="metric-value">$14,775</span>
        </div>
        <div class="metric-item">
            <span class="metric-label">New MRR</span>
            <span class="metric-value">$14,775</span>
        </div>
        <div class="metric-item">
            <span class="metric-label">Upgrades</span>
            <span class="metric-value">$13,000</span>
        </div>
        <div class="metric-item">
            <span class="metric-label">Downgrades</span>
            <span class="metric-value">$755</span>
        </div>
        <div class="metric-item">
            <span class="metric-label">ARPU</span>
            <span class="metric-value">$10,000</span>
        </div>
        <div class="metric-item">
            <span class="metric-label">Reactivations</span>
            <span class="metric-value">$10,000</span>
        </div>
        <div class="metric-item">
            <span class="metric-label">Existing</span>
            <span class="metric-value">$10,000</span>
        </div>
        <div class="metric-item">
            <span class="metric-label">Churn</span>
            <span class="metric-value">$100</span>
        </div>
    </div>

    
<div class="flex justify-between items-start mb-4">
        <div></div> <!-- Empty div to push legend to right -->
        <x-sections.legend />
    </div>
        <!-- Chart Canvas -->
        <div class="chart-canvas-container">
            <canvas id="revenueChart"></canvas>
        </div>
    </div>
</div>

<style>
.chart-card {
    background: #1D1E2B;
    border-radius: 8px;
    border: 1px solid #52525F;
    padding: 20px 24px 20px 24px;
    margin-top: 10px;
    width: 1224px;
}

/* Header Styles */
.chart-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 24px;
    position: relative;
}

.chart-title {
    font-size: 20px;
    font-weight: 700;
    color: #f1f5f9;
    margin: 0;
}

.chart-toggle {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    background: rgba(255, 255, 255, 0.03);
    border-radius: 6px;
    padding: 2px;
}

.toggle-btn {
    padding: 6px 16px;
    background: transparent;
    border: none;
    border-radius: 4px;
    font-size: 13px;
    font-weight: 500;
    color: #94a3b8;
    cursor: pointer;
    transition: all 0.2s ease;
}

.toggle-btn.active {
    background: #6366f1;
    color: #ffffff;
}

.toggle-btn:hover:not(.active) {
    background: rgba(255, 255, 255, 0.05);
    color: #e2e8f0;
}

.chart-date {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 13px;
    color: #94a3b8;
}

.date-display {
    color: #f1f5f9;
    font-weight: 500;
}

.date-separator {
    opacity: 0.5;
}

.date-dropdown {
    background: transparent;
    border: none;
    color: #94a3b8;
    font-size: 13px;
    font-weight: 500;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 6px;
    transition: color 0.2s ease;
}

.date-dropdown:hover {
    color: #e2e8f0;
}

/* Metrics Grid */
.metrics-grid-chart {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
    margin-bottom: 16px;
}

.metric-item {
    background: #1D1E2B;
    border: 1px solid #52525F;
    border-radius: 8px;
    padding: 20px 20.5px 20.5px 24px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    width: 276px;
    height: 69px;
    gap: 12px;
}

.metric-label {
    font-size: 12px;
    font-weight: 500;
    color: #94a3b8;
    text-align: left;
}

.metric-value {
    font-size: 20px;
    font-weight: 700;
    color: #f1f5f9;
    text-align: right;
}

/* Chart Container */
.chart-container-wrapper {
    display: flex;
    gap: 24px;
    min-height: 500px;
    position: relative;
}

/* Legend Panel */
.chart-legend-panel {
    width: 240px;
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.06);
    border-radius: 10px;
    padding: 20px;
    display: flex;
    flex-direction: column;
    gap: 16px;
    flex-shrink: 0;
}

.legend-title {
    font-size: 15px;
    font-weight: 600;
    color: #f1f5f9;
}

.legend-date {
    font-size: 12px;
    font-weight: 500;
    color: #64748b;
    margin-top: -8px;
}

.legend-items {
    display: flex;
    flex-direction: column;
    gap: 12px;
    flex: 1;
}

.legend-row {
    display: flex;
    align-items: center;
    gap: 10px;
}

.legend-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    flex-shrink: 0;
}

.legend-label {
    flex: 1;
    font-size: 13px;
    font-weight: 500;
    color: #94a3b8;
}

.legend-value {
    font-size: 13px;
    font-weight: 600;
    color: #f1f5f9;
}

.legend-total {
    display: flex;
    align-items: center;
    gap: 10px;
    padding-top: 16px;
    border-top: 1px solid rgba(255, 255, 255, 0.06);
    margin-top: 8px;
}

.legend-label-total {
    flex: 1;
    font-size: 14px;
    font-weight: 600;
    color: #f1f5f9;
}

.legend-value-total {
    font-size: 16px;
    font-weight: 700;
    color: #ef4444;
}

/* Chart Canvas */
.chart-canvas-container {
    flex: 1;
    padding: 20px;
    min-height: 500px;
}

#revenueChart {
    width: 100% !important;
    height: 100% !important;
}

/* Custom Tooltip Styling */
.chartjs-tooltip {
    background: #2D2E3F !important;
    border: none !important;
    border-radius: 8px !important;
    padding: 16px !important;
    width: 266px !important;
    height: 177px !important;
    top: 54px !important;
    left: 16px !important;
    gap: 127px !important;
}

.chartjs-tooltip-key {
    display: inline-block;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    margin-right: 8px;
}

/* Responsive */
@media (max-width: 1200px) {
    .metrics-grid-chart {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 900px) {
    .chart-container-wrapper {
        flex-direction: column;
    }
    
    .chart-legend-panel {
        width: 100%;
    }
    
    .chart-header {
        flex-wrap: wrap;
        gap: 16px;
    }
    
    .chart-toggle {
        position: static;
        transform: none;
    }
}

@media (max-width: 600px) {
    .metrics-grid-chart {
        grid-template-columns: 1fr;
    }
}
</style>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('revenueChart');
    
    // Generate data for 19 days (1 Jan to 19 Jan)
    const labels = [];
    for (let i = 1; i <= 19; i++) {
        labels.push(`${i} Jan`);
    }
    
    // Function to generate colors that change from bar 6 onwards
    function getBarColors(baseColor, accentColor, count) {
        const colors = [];
        for (let i = 0; i < count; i++) {
            // Change color from bar 6 (index 5) onwards
            colors.push(i >= 5 ? accentColor : baseColor);
        }
        return colors;
    }
    
    // Stacked bar chart data matching the Figma design
    const data = {
        labels: labels,
        datasets: [
            {
                label: 'Churn',
                data: [400, 450, 500, 525, 575, 600, 625, 625, 650, 650, 675, 750, 775, 775, 800, 875, 900, 900, 925],
                backgroundColor: getBarColors('#FF64D4', '#FF64D4', 19),
                borderRadius: 0,
                borderSkipped: false,
            },
            {
                label: 'Downgrades',
                data: [600, 650, 700, 750, 800, 850, 900, 950, 1000, 1050, 1100, 1150, 1200, 1250, 1300, 1350, 1400, 1450, 1500],
                backgroundColor: getBarColors('#BB87FC', '#BB87FC', 19),
                borderRadius: 0,
                borderSkipped: false,
            },
            {
                label: 'Existing',
                data: [1800, 1900, 2000, 2100, 2200, 2300, 2400, 2500, 2600, 2700, 2800, 2900, 3000, 3100, 3200, 3300, 3400, 3500, 3600],
                backgroundColor: getBarColors('#5B68F1', '#5B68F1', 19),
                borderRadius: 0,
                borderSkipped: false,
            },
            {
                label: 'Churn',
                data: [100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 200, 200, 200, 200, 200, 200],
                backgroundColor: getBarColors('#5DD8FF', '#5DD8FF', 19),
                borderRadius: 0,
                borderSkipped: false,
            },
            {
                label: 'Reactivations',
                data: [800, 900, 1000, 1100, 1200, 1300, 1400, 1500, 1600, 1700, 1800, 1900, 2000, 2100, 2200, 2300, 2400, 2500, 2600],
                backgroundColor: getBarColors('#75FF93', '#75FF93', 19),
                borderRadius: 0,
                borderSkipped: false,
            },
            {
                label: 'Upgrades',
                data: [300, 300, 300, 300, 300, 300, 300, 300, 300, 300, 300, 300, 300, 300, 400, 500, 500, 500, 500],
                backgroundColor: getBarColors('#8987FD', '#8987FD', 19),
                borderRadius: 0,
                borderSkipped: false,
            },
            {
                label: 'New MRR',
                data: [1200, 1500, 1600, 1700,1800, 1900, 2000, 3000, 3200, 3300, 3400, 3500, 3600, 3700, 3800, 3900, 4000, 4000, 4200],
                backgroundColor: getBarColors('#F24A4A', '#F24A4A', 19),
                borderRadius: {
                    topLeft: 4,
                    topRight: 4
                },
                borderSkipped: false,
            }
        ]
    };
    
    const config = {
        type: 'bar',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    enabled: false,
                    external: function(context) {
                        // Tooltip Element
                        let tooltipEl = document.getElementById('chartjs-tooltip');

                        // Create element on first render
                        if (!tooltipEl) {
                            tooltipEl = document.createElement('div');
                            tooltipEl.id = 'chartjs-tooltip';
                            tooltipEl.style.background = '#2D2E3F';
                            tooltipEl.style.borderRadius = '8px';
                            tooltipEl.style.color = 'white';
                            tooltipEl.style.opacity = 1;
                            tooltipEl.style.pointerEvents = 'none';
                            tooltipEl.style.position = 'absolute';
                            tooltipEl.style.transform = 'translate(-50%, 0)';
                            tooltipEl.style.transition = 'all .1s ease';
                            tooltipEl.style.width = '266px';
                            tooltipEl.style.padding = '16px';
                            tooltipEl.style.fontFamily = 'Inter, sans-serif';
                            tooltipEl.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.3)';
                            document.body.appendChild(tooltipEl);
                        }
                        
                        // Create or get the arrow indicator
                        let arrowEl = document.getElementById('chartjs-tooltip-arrow');
                        if (!arrowEl) {
                            arrowEl = document.createElement('div');
                            arrowEl.id = 'chartjs-tooltip-arrow';
                            arrowEl.style.position = 'absolute';
                            arrowEl.style.width = '0';
                            arrowEl.style.height = '0';
                            arrowEl.style.borderLeft = '8px solid transparent';
                            arrowEl.style.borderRight = '8px solid transparent';
                            arrowEl.style.borderTop = '8px solid #2D2E3F';
                            arrowEl.style.transform = 'translate(-50%, 0)';
                            arrowEl.style.pointerEvents = 'none';
                            document.body.appendChild(arrowEl);
                        }
                        
                        // Create or get the dot indicator
                        let dotEl = document.getElementById('chartjs-tooltip-dot');
                        if (!dotEl) {
                            dotEl = document.createElement('div');
                            dotEl.id = 'chartjs-tooltip-dot';
                            dotEl.style.position = 'absolute';
                            dotEl.style.width = '10px';
                            dotEl.style.height = '10px';
                            dotEl.style.borderRadius = '50%';
                            dotEl.style.background = '#EF4444';
                            dotEl.style.border = '2px solid #2D2E3F';
                            dotEl.style.transform = 'translate(-50%, -50%)';
                            dotEl.style.pointerEvents = 'none';
                            dotEl.style.boxShadow = '0 0 0 2px rgba(239, 68, 68, 0.3)';
                            document.body.appendChild(dotEl);
                        }

                        // Hide if no tooltip
                        const tooltipModel = context.tooltip;
                        if (tooltipModel.opacity === 0) {
                            tooltipEl.style.opacity = 0;
                            return;
                        }

                        // Set Text
                        if (tooltipModel.body) {
                            const titleLines = ['MRR Breakdown'];
                            const dateLines = [tooltipModel.dataPoints[0].label + ' 2024'];
                            const bodyLines = tooltipModel.dataPoints.map((item, index) => {
                                const colors = ['#F24A4A', '#8987FD', '#75FF93', '#5B68F1', '#BB87FC', '#FF64D4'];
                                return {
                                    color: colors[5 - index],
                                    label: item.dataset.label,
                                    value: '$' + item.parsed.y.toLocaleString()
                                };
                            });

                            let innerHtml = '<div style="display: flex; flex-direction: column; gap: 12px;">';
                            
                            // Title and Date on same line
                            innerHtml += '<div style="display: flex; justify-content: space-between; align-items: center;">';
                            innerHtml += '<div style="font-size: 15px; font-weight: 600; color: #FFFFFF;">' + titleLines[0] + '</div>';
                            innerHtml += '<div style="font-size: 13px; font-weight: 500; color: #94A3B8;">' + dateLines[0] + '</div>';
                            innerHtml += '</div>';
                            
                            // Body items
                            bodyLines.forEach(line => {
                                innerHtml += '<div style="display: flex; justify-content: space-between; align-items: center;">';
                                innerHtml += '<div style="display: flex; align-items: center; gap: 8px;">';
                                innerHtml += '<div style="width: 8px; height: 8px; border-radius: 50%; background: ' + line.color + ';"></div>';
                                innerHtml += '<span style="font-size: 13px; font-weight: 500; color: #FFFFFF;">' + line.label + '</span>';
                                innerHtml += '</div>';
                                innerHtml += '<span style="font-size: 13px; font-weight: 500; color: #FFFFFF;">' + line.value + '</span>';
                                innerHtml += '</div>';
                            });
                            
                            // Total
                            let sum = 0;
                            tooltipModel.dataPoints.forEach(item => {
                                sum += item.parsed.y;
                            });
                            innerHtml += '<div style="margin-top: 4px; padding-top: 12px; border-top: 1px solid rgba(255, 255, 255, 0.1);"></div>';
                            innerHtml += '<div style="display: flex; justify-content: space-between; align-items: center;">';
                            innerHtml += '<div style="display: flex; align-items: center; gap: 8px;">';
                            innerHtml += '<div style="width: 8px; height: 8px; border-radius: 50%; background: #EF4444;"></div>';
                            innerHtml += '<span style="font-size: 14px; font-weight: 600; color: #FFFFFF;">NET MRR</span>';
                            innerHtml += '</div>';
                            innerHtml += '<span style="font-size: 14px; font-weight: 700; color: #FFFFFF;">$' + sum.toLocaleString() + '</span>';
                            innerHtml += '</div>';
                            
                            innerHtml += '</div>';
                            
                            tooltipEl.innerHTML = innerHtml;
                        }

                        const position = context.chart.canvas.getBoundingClientRect();

                        // Display, position, and set styles for font
                        tooltipEl.style.opacity = 1;
                        tooltipEl.style.left = position.left + window.pageXOffset + tooltipModel.caretX + 'px';
                        tooltipEl.style.top = position.top + window.pageYOffset + tooltipModel.caretY - tooltipEl.offsetHeight - 10 + 'px';
                    }
                }
            },
            scales: {
                x: {
                    stacked: true,
                    grid: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        color: '#64748b',
                        font: {
                            size: 11,
                            weight: 500
                        },
                        padding: 8
                    }
                },
                y: {
                    stacked: true,
                    beginAtZero: true,
                    max: 13000,
                    grid: {
                        color: 'rgba(255, 255, 255, 0.05)',
                        drawBorder: false
                    },
                    ticks: {
                        color: '#64748b',
                        font: {
                            size: 11,
                            weight: 500
                        },
                        padding: 8,
                        stepSize: 1000,
                        callback: function(value) {
                            return (value / 1000) + 'k';
                        }
                    },
                    border: {
                        display: false
                    }
                }
            },
            interaction: {
                mode: 'index',
                intersect: false
            },
            barThickness: 24,
            categoryPercentage: 0.8,
            barPercentage: 0.9
        }
    };
    
    const chart = new Chart(ctx, config);
    
    // Toggle button functionality
    const toggleBtns = document.querySelectorAll('.toggle-btn');
    toggleBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            toggleBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            // You can add logic here to switch between MRR and ARPU data
            const type = this.getAttribute('data-type');
            console.log('Switched to:', type);
        });
    });
});
</script>
