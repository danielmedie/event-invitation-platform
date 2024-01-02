const baseURL = 'http://localhost/event-invitation-platform/server/';

const api = {
  getInvitations: async () => {
    const response = await fetch(`${baseURL}get_invitations.php`);
    return response.json();
  },
  createInvitation: async (guestName) => {
    await fetch(`${baseURL}create_invitation.php`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({ guest_name: guestName }),
    });
  },
};

export default api;
