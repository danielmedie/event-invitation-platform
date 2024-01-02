import { BrowserRouter as Router, Route } from 'react-router-dom';
import AdminPage from './components/AdminPage';

const App = () => {
  return (
    <Router>
      <Route path="/admin" component={AdminPage} />
    </Router>
  );
};

export default App;
