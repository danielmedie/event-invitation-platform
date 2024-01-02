import React, { useState, useEffect } from 'react';
import api from './api'; // Importera API-funktioner

const InvitationList = () => {
  const [invitations, setInvitations] = useState([]);

  useEffect(() => {
    // Hämta inbjudningar från databasen när komponenten laddas
    const fetchInvitations = async () => {
      const fetchedInvitations = await api.getInvitations();
      setInvitations(fetchedInvitations);
    };
    fetchInvitations();
  }, []);

  return (
    <div>
      <h1>Lista över inbjudningar</h1>
      {invitations.map((invitation) => (
        <div key={invitation.id}>
          <p>{invitation.guest_name}</p>
          <p>Status: {invitation.attendance_status}</p>
        </div>
      ))}
    </div>
  );
};

export default InvitationList;
