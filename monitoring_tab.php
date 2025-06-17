<!-- Water Monitoring Tab --> 
<div id="monitoring" class="tab-content active">
    <div class="dashboard-grid">
        <!-- Virtual Tank -->
        <div class="card">
            <h2 style="text-align: center; margin-bottom: 20px; color: #333;">Virtual Water Tank</h2>
            <div class="tank-container">
                <div class="tank">
                    <div class="water" id="waterLevel"></div>
                    <div class="water-level-display" id="levelDisplay">75%</div>
                    <div class="tank-labels">
                        <span>100%</span>
                        <span>75%</span>
                        <span>50%</span>
                        <span>25%</span>
                        <span>0%</span>
                    </div>
                    <div class="alert" id="alertBox" style="margin-top: 10px;">
                        <strong>⚠️ Warning:</strong> <span id="alertMessage"></span>
                    </div>
                </div>
            </div>
            
            <div class="status-panel" style="text-align: center; margin-top: 20px;">
                <span class="status-indicator status-normal" style="margin-right: 10px;"></span>
                <span>System Status: <strong id="systemStatus">NORMAL</strong></span>
            </div>
        </div>

        <!-- Sensor Stats -->
        <div class="card">
            <h2 style="margin-bottom: 20px; color: #333;">Quick Stats</h2>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; font-size: 0.9rem;">
                <div>Flow Rate: <strong id="flowRate">2.5 L/min</strong></div>
                <div>Temperature: <strong id="temperature">24°C</strong></div>
                <div>Pressure: <strong id="pressure">1.2 bar</strong></div>
                <div>pH Level: <strong id="phLevel">7.2</strong></div>
            </div>
        </div>
    </div>
</div>
