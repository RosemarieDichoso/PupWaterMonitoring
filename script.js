let currentLevel = 75; 
let isPumpRunning = true;

const chartData = [65, 70, 68, 75, 80, 78, 82, 85, 88, 90, 85, 82, 78, 75, 72, 70, 68, 65, 70, 75, 78, 80, 77, 75];

function switchTab(tabName, event) {
    document.querySelectorAll('.tab-content').forEach(tab => tab.classList.remove('active'));
    document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
    document.getElementById(tabName).classList.add('active');
    event.target.classList.add('active');
}

function updateWaterLevel(level) {
    currentLevel = Math.max(0, Math.min(100, level));
    const waterElement = document.getElementById('waterLevel');
    const displayElement = document.getElementById('levelDisplay');

    waterElement.style.height = currentLevel + '%';
    displayElement.textContent = Math.round(currentLevel) + '%';

    updateSystemStatus();
}

function updateSystemStatus() {
    const statusElement = document.getElementById('systemStatus');
    const statusIndicator = document.querySelector('.status-indicator');
    const alertBox = document.getElementById('alertBox');
    const alertMessage = document.getElementById('alertMessage');

    if (currentLevel < 20) {
        statusElement.textContent = 'CRITICAL LOW';
        statusIndicator.className = 'status-indicator status-critical';
        showAlert('Critical water level detected! Immediate attention required.');
    } else if (currentLevel < 40) {
        statusElement.textContent = 'LOW LEVEL';
        statusIndicator.className = 'status-indicator status-warning';
        showAlert('Water level is running low. Consider refilling soon.');
    } else {
        statusElement.textContent = 'NORMAL';
        statusIndicator.className = 'status-indicator status-normal';
        hideAlert();
    }
}

function showAlert(message) {
    const alertBox = document.getElementById('alertBox');
    const alertMessage = document.getElementById('alertMessage');
    alertMessage.textContent = message;
    alertBox.classList.add('show');
}

function hideAlert() {
    document.getElementById('alertBox').classList.remove('show');
}

function initChart() {
    const chartContainer = document.getElementById('chart');
    if (!chartContainer) return;
    chartContainer.innerHTML = '';

    chartData.forEach((value, index) => {
        const bar = document.createElement('div');
        bar.className = 'bar';
        bar.style.height = value + '%';
        bar.title = `Hour ${index + 1}: ${value}%`;
        chartContainer.appendChild(bar);
    });
}

function simulateRealtimeData() {
    document.getElementById('flowRate').textContent = (2.0 + Math.random() * 1.0).toFixed(1) + ' L/min';
    document.getElementById('temperature').textContent = (23 + Math.random() * 3).toFixed(1) + '°C';
    document.getElementById('pressure').textContent = (1.0 + Math.random() * 0.5).toFixed(1) + ' bar';
    document.getElementById('phLevel').textContent = (6.8 + Math.random() * 0.8).toFixed(1);

    if (document.getElementById('avgLevel')) {
        document.getElementById('avgLevel').textContent = (75 + Math.random() * 10 - 5).toFixed(0) + '%';
        document.getElementById('todayConsumption').textContent = (240 + Math.random() * 20 - 10).toFixed(0) + 'L';
        document.getElementById('uptime').textContent = (99.2 + Math.random() * 0.8 - 0.4).toFixed(1) + '%';
        document.getElementById('efficiency').textContent = (94 + Math.random() * 6 - 3).toFixed(0) + '%';
        document.getElementById('weeklyConsumption').textContent = (1680 + Math.random() * 100 - 50).toFixed(0) + 'L';
        document.getElementById('monthlyConsumption').textContent = (7200 + Math.random() * 300 - 150).toFixed(0) + 'L';
        document.getElementById('quarterlyConsumption').textContent = (21600 + Math.random() * 500 - 250).toFixed(0) + 'L';
        document.getElementById('annualConsumption').textContent = (86400 + Math.random() * 1000 - 500).toFixed(0) + 'L';
        document.getElementById('dataPackets').textContent = (1247 + Math.floor(Math.random() * 10)).toString();
        document.getElementById('totalEmails').textContent = (47 + Math.floor(Math.random() * 3)).toString();
        const now = new Date();
        const timeAgo = Math.floor(Math.random() * 60);
        document.getElementById('lastArduinoUpdate').textContent = timeAgo < 5 ? 'Just now' : `${timeAgo} seconds ago`;
    }
}

function autoFluctuate() {
    const change = (Math.random() - 0.5) * 0.5;
    updateWaterLevel(currentLevel + change);
}

document.addEventListener('DOMContentLoaded', function () {
    updateWaterLevel(currentLevel);
    initChart();
    setInterval(simulateRealtimeData, 3000);
    setInterval(autoFluctuate, 2000);
});

// --- Consumption Analytics Modal Logic ---

const consumptionData = {
    weekly: {
        title: "Weekly Water Consumption Details",
        total: "1,680L",
        period: "Last 7 Days",
        data: [
            { date: "2024-06-16", consumption: 245, peakTime: "2:00 PM", status: "Normal" },
            { date: "2024-06-15", consumption: 238, peakTime: "1:45 PM", status: "Normal" },
            { date: "2024-06-14", consumption: 252, peakTime: "3:15 PM", status: "High" },
            { date: "2024-06-13", consumption: 230, peakTime: "2:30 PM", status: "Normal" },
            { date: "2024-06-12", consumption: 265, peakTime: "4:00 PM", status: "High" },
            { date: "2024-06-11", consumption: 228, peakTime: "1:30 PM", status: "Normal" },
            { date: "2024-06-10", consumption: 222, peakTime: "2:15 PM", status: "Normal" }
        ]
    },
    monthly: {
        title: "Monthly Water Consumption Details",
        total: "7,200L",
        period: "Last 30 Days",
        data: [
            { date: "Week 4 (Jun 10-16)", consumption: 1680, peakTime: "2:00-4:00 PM", status: "Normal" },
            { date: "Week 3 (Jun 3-9)", consumption: 1750, peakTime: "1:30-3:30 PM", status: "High" },
            { date: "Week 2 (May 27-Jun 2)", consumption: 1820, peakTime: "2:15-4:15 PM", status: "High" },
            { date: "Week 1 (May 20-26)", consumption: 1950, peakTime: "1:45-3:45 PM", status: "Very High" }
        ]
    },
    quarterly: {
        title: "Quarterly Water Consumption Details",
        total: "21,600L",
        period: "Last 3 Months",
        data: [
            { date: "June 2024", consumption: 7200, peakTime: "2:00-4:00 PM", status: "Normal" },
            { date: "May 2024", consumption: 7800, peakTime: "1:30-3:30 PM", status: "High" },
            { date: "April 2024", consumption: 6600, peakTime: "2:30-4:30 PM", status: "Normal" }
        ]
    },
    annual: {
        title: "Annual Water Consumption Details",
        total: "86,400L",
        period: "Last 12 Months",
        data: [
            { date: "Q2 2024 (Apr-Jun)", consumption: 21600, peakTime: "2:00-4:00 PM", status: "Normal" },
            { date: "Q1 2024 (Jan-Mar)", consumption: 19800, peakTime: "1:45-3:45 PM", status: "Normal" },
            { date: "Q4 2023 (Oct-Dec)", consumption: 22500, peakTime: "2:15-4:15 PM", status: "High" },
            { date: "Q3 2023 (Jul-Sep)", consumption: 22500, peakTime: "1:30-3:30 PM", status: "High" }
        ]
    }
};

function openModal(period) {
    const modal = document.getElementById('consumptionModal');
    const data = consumptionData[period];

    document.getElementById('modalTitle').textContent = data.title;
    document.getElementById('modalTotalConsumption').textContent = data.total;
    document.getElementById('modalPeriodLabel').textContent = data.period;

    const tableBody = document.getElementById('consumptionTableBody');
    tableBody.innerHTML = '';

    data.data.forEach(row => {
        const tr = document.createElement('tr');
        tr.innerHTML = `
            <td>${row.date}</td>
            <td>${row.consumption}L</td>
            <td>${row.peakTime}</td>
            <td><span style="color: ${getStatusColor(row.status)}; font-weight: bold;">${row.status}</span></td>
        `;
        tableBody.appendChild(tr);
    });

    modal.style.display = 'block';
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    const modal = document.getElementById('consumptionModal');
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
}

function getStatusColor(status) {
    switch (status) {
        case 'Normal': return '#00d084';
        case 'High': return '#ffa726';
        case 'Very High': return '#f44336';
        default: return '#666';
    }
}

window.onclick = function (event) {
    const modal = document.getElementById('consumptionModal');
    if (event.target === modal) {
        closeModal();
    }
};

document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape') {
        closeModal();
    }
});
