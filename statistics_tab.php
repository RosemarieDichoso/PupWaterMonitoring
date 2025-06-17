<!-- Statistics Tab -->
        <div id="statistics" class="tab-content">
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-value" id="avgLevel">78%</div>
                    <div class="stat-label">Average Water Level</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value" id="todayConsumption">245L</div>
                    <div class="stat-label">Today's Consumption</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value" id="uptime">99.2%</div>
                    <div class="stat-label">System Uptime</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value" id="efficiency">94%</div>
                    <div class="stat-label">Pump Efficiency</div>
                </div>
            </div>

            <!-- Consumption Analytics -->
<div class="card" style="margin-top: 30px;">
    <h2 style="margin-bottom: 20px;">📊 Water Consumption Analytics</h2>
    <div class="stats-grid">
        <div class="stat-card" style="background: linear-gradient(135deg, #800000, #B22222);" onclick="openModal('weekly')">
            <div class="stat-value" id="weeklyConsumption">1,680L</div>
            <div class="stat-label">Weekly Consumption</div>
            <div style="font-size: 0.8rem; margin-top: 5px; opacity: 0.9;">240L/day average</div>
            <div class="clickable-hint" style="margin-top: 10px;">📋 Click to view details</div>
        </div>
        <div class="stat-card" style="background: linear-gradient(135deg, #800000, #B22222);" onclick="openModal('monthly')">
            <div class="stat-value" id="monthlyConsumption">7,200L</div>
            <div class="stat-label">Monthly Consumption</div>
            <div style="font-size: 0.8rem; margin-top: 5px; opacity: 0.9;">232L/day average</div>
            <div class="clickable-hint" style="margin-top: 10px;">📋 Click to view details</div>
        </div>
        <div class="stat-card" style="background: linear-gradient(135deg, #800000, #B22222);" onclick="openModal('quarterly')">
            <div class="stat-value" id="quarterlyConsumption">21,600L</div>
            <div class="stat-label">Quarterly Consumption</div>
            <div style="font-size: 0.8rem; margin-top: 5px; opacity: 0.9;">240L/day average</div>
            <div class="clickable-hint" style="margin-top: 10px;">📋 Click to view details</div>
        </div>
        <div class="stat-card" style="background: linear-gradient(135deg, #800000, #B22222);" onclick="openModal('annual')">
            <div class="stat-value" id="annualConsumption">86,400L</div>
            <div class="stat-label">Annual Consumption</div>
            <div style="font-size: 0.8rem; margin-top: 5px; opacity: 0.9;">237L/day average</div>
            <div class="clickable-hint" style="margin-top: 10px;">📋 Click to view details</div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="consumptionModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h2 class="modal-title" id="modalTitle">Water Consumption Details</h2>
            <span class="close" onclick="closeModal()">&times;</span>
        </div>
        <div class="modal-body">
            <div class="period-summary">
                <div class="summary-value" id="modalTotalConsumption">0L</div>
                <div class="summary-label" id="modalPeriodLabel">Total Consumption</div>
            </div>
            <table class="consumption-table" id="consumptionTable">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Daily Consumption (L)</th>
                        <th>Peak Usage Time</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody id="consumptionTableBody">
                    <!-- Data will be populated dynamically -->
                </tbody>
            </table>
        </div>
    </div>
</div>

            <!-- Arduino & Email Integration Status -->
            <div class="card" style="margin-top: 30px;">
                <h2 style="margin-bottom: 20px;">🔌 Arduino & Email Integration Status</h2>
                <div class="dashboard-grid">
                    <div style="padding: 20px; background: #f8f9fa; border-radius: 10px;">
                        <h4 style="margin-bottom: 15px; color: #800000;">📡 Arduino R3 Connection</h4>
                        <div style="display: flex; align-items: center; margin-bottom: 10px;">
                            <span class="status-indicator status-normal"></span>
                            <span><strong>Status:</strong> Connected</span>
                        </div>
                        <div style="margin-bottom: 10px;"><strong>Port:</strong> COM3</div>
                        <div style="margin-bottom: 10px;"><strong>Baud Rate:</strong> 9600</div>
                        <div style="margin-bottom: 10px;"><strong>Last Update:</strong> <span id="lastArduinoUpdate">Just now</span></div>
                        <div style="margin-bottom: 10px;"><strong>Data Packets:</strong> <span id="dataPackets">1,247</span> received</div>
                        <button class="btn btn-primary" style="margin-top: 10px;" onclick="testArduinoConnection()">Test Connection</button>
                    </div>
                    <div style="padding: 20px; background: #f8f9fa; border-radius: 10px;">
                        <h4 style="margin-bottom: 15px; color: #800000;">📧 Email Notification System</h4>
                        <div style="display: flex; align-items: center; margin-bottom: 10px;">
                            <span class="status-indicator status-normal"></span>
                            <span><strong>Status:</strong> Active</span>
                        </div>
                        <div style="margin-bottom: 10px;"><strong>SMTP Server:</strong> smtp.gmail.com</div>
                        <div style="margin-bottom: 10px;"><strong>Recipients:</strong> 3 configured</div>
                        <div style="margin-bottom: 10px;"><strong>Last Email:</strong> <span id="lastEmailSent">2 hours ago</span></div>
                        <div style="margin-bottom: 10px;"><strong>Total Sent:</strong> <span id="totalEmails">47</span> emails</div>
                        <button class="btn btn-success" style="margin-top: 10px;" onclick="testEmailNotification()">Send Test Email</button>
                    </div>
                </div>
            </div>

            <!-- Email Notification Settings --> 
<div class="card" style="margin-top: 30px;">
    <h2 style="margin-bottom: 20px;">⚙️ Notification Settings</h2>
    <div class="dashboard-grid">
        <!-- Email Recipients -->
        <div>
            <h4 style="margin-bottom: 15px;">Email Recipients</h4>
            <div id="emailRecipients">
                <div style="display: flex; align-items: center; justify-content: space-between; padding: 10px; background: #f8f9fa; border-radius: 8px; margin-bottom: 10px;">
                    <span>admin@pup.edu.ph</span>
                    <span style="color: #00d084;">✓ Active</span>
                </div>
                <div style="display: flex; align-items: center; justify-content: space-between; padding: 10px; background: #f8f9fa; border-radius: 8px; margin-bottom: 10px;">
                    <span>maintenance@pup.edu.ph</span>
                    <span style="color: #00d084;">✓ Active</span>
                </div>
                <div style="display: flex; align-items: center; justify-content: space-between; padding: 10px; background: #f8f9fa; border-radius: 8px;">
                    <span>facilities@pup.edu.ph</span>
                    <span style="color: #00d084;">✓ Active</span>
                </div>
            </div>
            <button class="btn btn-primary" style="margin-top: 15px;" onclick="addEmailRecipient()">Add Recipient</button>
        </div>

        <!-- Alert Thresholds -->
        <div>
            <h4 style="margin-bottom: 15px;">Alert Thresholds</h4>

            <!-- Critical Level -->
            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px;">Critical Level Alert (%)</label>
                <input type="range" min="10" max="30" value="20" style="width: 100%;" onchange="updateThreshold('critical', this.value)">
                <span id="criticalThreshold">20%</span>
            </div>

            <!-- Warning Level -->
            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px;">Warning Level Alert (%)</label>
                <input type="range" min="30" max="50" value="40" style="width: 100%;" onchange="updateThreshold('warning', this.value)">
                <span id="warningThreshold">40%</span>
            </div>

            <!-- Email Frequency -->
            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px;">Email Frequency</label>
                <select style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 5px;">
                    <option>Immediate</option>
                    <option>Every 5 minutes</option>
                    <option>Every 15 minutes</option>
                    <option>Every 30 minutes</option>
                </select>
            </div>
        </div>
    </div>
</div>

            <div class="card">
                <h2 style="margin-bottom: 20px;">Water Level History (24 Hours)</h2>
                <div class="chart-container">
                    <div class="chart" id="chart"></div>
                </div>
            </div>

            <div class="dashboard-grid" style="margin-top: 30px;">
    <div class="card">
        <h3 style="margin-bottom: 15px;">Daily Reports</h3>
        <div>
            <div style="display: flex; justify-content: space-between; padding: 10px; background: #f8f9fa; border-radius: 8px; margin-bottom: 10px;">
                <span>Peak Usage Time</span>
                <strong>2:00 PM - 4:00 PM</strong>
            </div>
            <div style="display: flex; justify-content: space-between; padding: 10px; background: #f8f9fa; border-radius: 8px; margin-bottom: 10px;">
                <span>Minimum Level Today</span>
                <strong>45%</strong>
            </div>
            <div style="display: flex; justify-content: space-between; padding: 10px; background: #f8f9fa; border-radius: 8px; margin-bottom: 10px;">
                <span>Refill Cycles</span>
                <strong>3 times</strong>
            </div>
            <div style="display: flex; justify-content: space-between; padding: 10px; background: #f8f9fa; border-radius: 8px;">
                <span>Energy Consumption</span>
                <strong>12.4 kWh</strong>
            </div>
        </div>
    </div>

    <div class="card">
        <h3 style="margin-bottom: 15px;">System Alerts</h3>
        <div id="alertsList">
            <div style="padding: 10px; border-left: 4px solid #00d084; background: rgba(0, 208, 132, 0.1); margin-bottom: 10px; border-radius: 0 8px 8px 0;">
                <strong>10:30 AM</strong> - System back to normal operation
            </div>
            <div style="padding: 10px; border-left: 4px solid #ffa726; background: rgba(255, 167, 38, 0.1); margin-bottom: 10px; border-radius: 0 8px 8px 0;">
                <strong>09:15 AM</strong> - Low water level detected (35%)
            </div>
            <div style="padding: 10px; border-left: 4px solid #00d084; background: rgba(0, 208, 132, 0.1); border-radius: 0 8px 8px 0;">
                <strong>08:00 AM</strong> - Auto-fill cycle completed successfully
            </div>
        </div>
    </div>
</div>
</div>