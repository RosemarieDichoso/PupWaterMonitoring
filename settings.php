<div id="notifications" class="tab-content" style="display: none;"> 
    <div class="card" style="margin-top: 30px;">
        <h2 style="margin-bottom: 20px;">⚙️ Notification Settings</h2>
        <div class="dashboard-grid">

            <!-- Email Recipients -->
            <div>
                <h4 style="margin-bottom: 15px;">Email Recipients</h4>
                <div id="emailRecipients">
                    <div class="email-box">
                        <span>admin@pup.edu.ph</span>
                        <span style="color: #00d084;">✓ Active</span>
                    </div>
                    <div class="email-box">
                        <span>maintenance@pup.edu.ph</span>
                        <span style="color: #00d084;">✓ Active</span>
                    </div>
                    <div class="email-box">
                        <span>facilities@pup.edu.ph</span>
                        <span style="color: #00d084;">✓ Active</span>
                    </div>
                </div>
                <input type="email" id="newRecipientEmail" placeholder="Enter email" style="margin-top:10px; padding: 6px; width: 100%;" />
                <button class="btn btn-primary" style="margin-top: 10px;" onclick="addEmailRecipient()">Add Recipient</button>
            </div>

            <!-- Alert Thresholds -->
            <div>
                <h4 style="margin-bottom: 15px;">Alert Thresholds</h4>

                <!-- Critical Level -->
                <div style="margin-bottom: 15px;">
                    <label>Critical Level Alert (%)</label>
                    <input id="criticalSlider" type="range" min="10" max="30" value="20" style="width: 100%;" onchange="updateThreshold('critical', this.value)">
                    <span id="criticalThreshold">20%</span>
                </div>

                <!-- Warning Level -->
                <div style="margin-bottom: 15px;">
                    <label>Warning Level Alert (%)</label>
                    <input id="warningSlider" type="range" min="30" max="50" value="40" style="width: 100%;" onchange="updateThreshold('warning', this.value)">
                    <span id="warningThreshold">40%</span>
                </div>

                <!-- Email Frequency -->
                <div style="margin-bottom: 15px;">
                    <label>Email Frequency</label>
                    <select id="emailFrequency" style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 5px;">
                        <option>Immediate</option>
                        <option>Every 5 minutes</option>
                        <option>Every 15 minutes</option>
                        <option>Every 30 minutes</option>
                    </select>
                </div>

                <!-- Save Settings Button -->
                <button class="btn btn-success" onclick="saveNotificationSettings()">Save Settings</button>
            </div>
        </div>
    </div>
</div>
