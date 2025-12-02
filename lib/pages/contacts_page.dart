import 'package:flutter/material.dart';

class ContactsPage extends StatelessWidget {
  const ContactsPage({super.key});

  @override
  Widget build(BuildContext context) {
    return ListView.builder(
      itemCount: 20, // Dummy data
      itemBuilder: (context, index) {
        return ListTile(
          leading: const CircleAvatar(
            backgroundImage: AssetImage('assets/profile.jpg'),
          ),
          title: Text('Contact ${index + 1}'),
          subtitle: const Text('Last seen recently'),
        );
      },
    );
  }
}
