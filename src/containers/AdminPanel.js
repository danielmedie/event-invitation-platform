import React, { useState } from 'react';
import api from './api'; 

const AdminPanel = () => {
  const [guestName, setGuestName] = useState('');

  const handleCreateInvitation = async () => {
    // Logik för att skapa en inbjudan och skicka data till backend
    await api.createInvitation(guestName);
  };

  return (
    <div>
      <h1>Adminpanel för inbjudningar</h1>
      <input
        type="text"
        value={guestName}
        onChange={(e) => setGuestName(e.target.value)}
        placeholder="Gästens namn"
      />
      <button onClick={handleCreateInvitation}>Skapa inbjudan</button>
    </div>
  );
};

export default AdminPanel;
