// import * as React from 'react';
// import { styled } from '@mui/material/styles';
import React, {useState} from 'react';
import Paper from '@mui/material/Paper';
import Grid from '@mui/material/Grid';
import { makeStyles } from 'material-ui-core';
import FormControl from '@mui/material/FormControl';
import InputLabel from '@mui/material/InputLabel';
import OutlinedInput from '@mui/material/OutlinedInput';
import InputAdornment from '@mui/material/InputAdornment';
import Typography from '@material-ui/core/Typography';
import Button from '@mui/material/Button';
import swal from 'sweetalert';

// const Item = styled(Paper)(({ theme }) => ({
//   backgroundColor: theme.palette.mode === 'dark' ? '#1A2027' : '#fff',
//   ...theme.typography.body2,
//   padding: theme.spacing(1),
//   textAlign: 'center',
//   color: theme.palette.text.secondary,
// }));

const useStyle = makeStyles((theme) => ({
    root: {
        height: '100vh',
    },
    paper: {
        margin: theme.spacing(8, 4),
        display: 'flex',
        flexDirection: 'column',
        alignItems: 'center',
    },
    image: {
      backgroundImage: 'url(https://lh3.googleusercontent.com/ji0GF2JVYqJ5bbm_qMdSbxVZ8WB0teTKYe5FbVaBje-AUCMTeQX12949DwqYevQW-UbjPOBTjpA2oBFEl7CgtfzxsmAB1wCGQ6kshR0_RT7TmA=w960-rj-l80-nu-e365)',
      backgroundSize: 'cover',
    },
    form: {
      width: '100%',
      marginTop: theme.spacing(1),
    },
    submit: {
      margin: theme.spacing(3, 0, 2),
    },
}));

async function loginUser(credentials) {
  return fetch('https://peserta31.msib5.hendevane.com/laravelSIB5/api/login', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(credentials)
  })
    .then(data => data.json())
 }

export default function BasicGrid() {
    const classes = useStyle();
    const [email, setEmail] = useState();
    const [password, setPassword] = useState();

    const handleSubmit = async e => {
      e.preventDefault();
      const response = await loginUser({
        email,
        password
      });
      if ('token' in response) {
        swal("Success", response.message, "success", {
          buttons: false,
          timer: 2000,
        })
        .then((value) => {
          localStorage.setItem('token', response['token']);
          localStorage.setItem('users', JSON.stringify(response['users']));
          window.location.href = "/produk";
        });
      } else {
        swal("Failed", response.message, "error");
      }
    }

  return (

      <Grid container className={classes.root}>
        <Grid items xs={4} md={7} className={classes.image} />
        <Grid item xs={8} md={5} component={Paper} elevation={6} square>
          <div className={classes.paper}>
            <Typography>
              From Login API
            </Typography>
            <form className={classes.form} noValidate onSubmit={handleSubmit}>
            <FormControl fullWidth sx={{ m: 1 }}>
              <InputLabel htmlFor="outlined-adornment-amount">Email</InputLabel>
              <OutlinedInput
                id="outlined-adornment-amount"
                startAdornment={<InputAdornment position="start">Email</InputAdornment>}
                label="Email"
                type='email'
                onChange={e => setEmail(e.target.value)}
              />
            </FormControl>
            <FormControl fullWidth sx={{ m: 1 }}>
              <InputLabel htmlFor="outlined-adornment-amount">Password</InputLabel>
              <OutlinedInput
                id="outlined-adornment-amount"
                startAdornment={<InputAdornment position="start">Password</InputAdornment>}
                label="Password"
                type='password'
                onChange={e => setPassword(e.target.value)}
              />
            </FormControl>
              <Button 
                variant="contained" 
                color="primary"
                type="submit"
                className={classes.submit}
              >
                Login
              </Button>
            </form>
          </div>
        </Grid>
      </Grid>

  );
}
